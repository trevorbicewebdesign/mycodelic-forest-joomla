<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author       Yannick Gaultier
 * @copyright    (c) Yannick Gaultier - Weeblr llc - 2020
 * @package      sh404SEF
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version      4.21.0.4206
 * @date        2020-06-26
 */

defined('_JEXEC') || die;

class plgSh404sefcoresh404sefSocial extends JPlugin
{
	static  $buttonsSize             = array(
		'small'  => '0.7rem',
		'medium' => '0.9rem',
		'large'  => '1.1rem',
		'xlarge' => '1.3rem'
	);
	private $_enabledButtons         = array('facebooklike', 'facebooksend', 'facebookshare', 'twitter', 'pinterestpinit', 'linkedin', 'whatsapp');
	private $_underscoredLanguageTag = '';
	private $_needFBSdk              = false;
	private $_needTracking           = false;

	public function __construct(&$subject, $config = array())
	{
		$this->autoloadLanguage = false;

		parent::__construct($subject, $config);

		// some networks use underscore in language tags
		$this->_underscoredLanguageTag = str_replace('-', '_', JFactory::getLanguage()->getTag());
		$this->_shortLanguageCode      = explode('_', $this->_underscoredLanguageTag);
		$this->_shortLanguageCode      = empty($this->_shortLanguageCode) ? 'en' : $this->_shortLanguageCode[0];
		$this->_linkedinScriptLoaded   = false;
	}

	/**
	 * Insert appropriate script links into document
	 */
	public function onSh404sefInsertSocialButtons(&$page, $sefConfig)
	{
		$app = JFactory::getApplication();

		// are we in the backend - that would be a mistake
		if (!defined('SH404SEF_IS_RUNNING') || $app->isAdmin())
		{
			return;
		}

		// don't display on errors
		$pageInfo = Sh404sefFactory::getPageInfo();
		if (!empty($pageInfo->httpStatus) && ($pageInfo->httpStatus == 404 || $pageInfo->httpStatus == 503))
		{
			return;
		}

		// are we on an edit page?
		if ('edit' == $app->input->getCmd('layout'))
		{
			return;
		}

		// don"t show button if specific tag is present on page
		if ($this->hasDisableTag($page))
		{
			return;
		}

		$processMode = 'convert';

		// check if this is an AMP page
		if (is_callable(
			array('wbAMP', 'isAMPRequest')
		))
		{
			$processMode = wbAMP::isAMPRequest() ? 'remove' : $processMode;
		}

		// Content tags conversion decision process
		/**
		 * Filter whether sharing buttons tags in content should be converted to actual buttons.
		 *
		 * @api
		 * @package sh404SEF\filter\output
		 * @var sh404sef_social_buttons_tags_process_mode
		 * @since   4.19.0
		 *
		 * @param string $processMode Whether tags in content should be converted to buttons, left alone or removed.
		 * @param JInput $input Current request query object.
		 *
		 * @return string convert | skip | remove
		 */
		$processMode = ShlHook::filter(
			'sh404sef_social_buttons_tags_process_mode',
			$processMode,
			$app->input
		);

		// regexp to catch plugin requests
		$regExp = '#{sh404sef_social_buttons(.*)}#Uus';

		if ($processMode == 'remove')
		{
			$page = ShlSystem_Strings::pr(
				$regExp,
				'',
				$page
			);
		}

		$this->loadLanguage();

		if ($processMode != 'convert')
		{
			// insert head links as needed
			$this->_insertSocialLinks($page, $sefConfig);
			return;
		}

		// search for our marker}
		if (preg_match_all($regExp, $page, $matches, PREG_SET_ORDER) > 0)
		{
			// process matches
			foreach ($matches as $id => $match)
			{
				$url       = '';
				$imageSrc  = '';
				$imageDesc = '';
				// extract target URL
				if (!empty($match[1]))
				{
					//normally, there is no quotes around attributes
					// but a description will probably have spaces, so we
					// now try to get attributes from both syntax
					jimport('joomla.utilities.utility');
					$attributes = JUtility::parseAttributes($match[1]);
					$url        = empty($attributes['url']) ? '' : $attributes['url'];
					$imageSrc   = empty($attributes['img']) ? '' : $attributes['img'];
					$imageDesc  = empty($attributes['desc']) ? '' : $attributes['desc'];

					// now process usual tags
					$raw            = explode(' ', $match[1]);
					$enabledButtons = array();
					foreach ($raw as $attribute)
					{
						$attribute = JString::trim($attribute);
						if (strpos($attribute, '=') === false)
						{
							continue;
						}
						$bits = explode('=', $attribute);
						if (empty($bits[1]))
						{
							continue;
						}
						switch ($bits[0])
						{
							case 'url':
								if (empty($url))
								{
									$base = JURI::base(true);
									if (substr($bits[1], 0, 10) == 'index.php?')
									{
										$url = JURI::getInstance()->toString(array('scheme', 'host', 'port')) . JRoute::_($bits[1]);
									}
									else if (!empty($base) && substr($bits[1], 0, JString::strlen($base)) == $base)
									{
										$url = JURI::getInstance()->toString(array('scheme', 'host', 'port')) . $bits[1];
									}
									else if (substr($bits[1], 0, 1) == '/')
									{
										$url = JString::rtrim(JURI::base(), '/') . $bits[1];
									}
									else
									{
										$url = $bits[1];
									}
								}
								break;
							case 'type':
								$newType = trim(strtolower($bits[1]));
								if ($this->params->get('buttonsType', 'static') == 'static')
								{
									// convert all facebook buttons to facebookshare
									// when using static buttons
									if (wbStartsWith($newType, 'facebook'))
									{
										$newType = 'facebookshare';
									}
								}
								if (!in_array($newType, $enabledButtons))
								{
									$enabledButtons[] = $newType;
								}
								break;
							case 'img':
								$imageSrc = empty($imageSrc) ? strtolower($bits[1]) : $imageSrc;
								break;
						}
					}

					if (!empty($enabledButtons))
					{
						$this->_enabledButtons = array_unique(
							$enabledButtons
						);
					}
				}
				// get buttons html
				$buttons = $this->_sh404sefGetSocialButtons($sefConfig, $url, $context = '', $content = $page, $imageSrc, $imageDesc, $isTag = true);
				$buttons = str_replace('\'', '\\\'', $buttons);

				// replace in document
				$page = str_replace($match[0], $buttons, $page);
			}
		}

		// insert head links as needed
		$this->_insertSocialLinks($page, $sefConfig);
	}

	private function _sh404sefGetSocialButtons($sefConfig, $url = '', $context = '', $content = null, $imageSrc = '', $imageDesc = '', $isTag = false)
	{
		$url = $this->_computeUrl($url, $sefConfig, $context, $content, $isTag);
		if (empty($url))
		{
			return $url;
		}

		$this->loadLanguage();

		// JLayout renderers data array
		$displayData                  = array();
		$displayData['buttons']       = array();
		$displayData['types']         = $this->_enabledButtons;
		$displayData['type']          = $this->params->get('buttonsType', 'static');
		$displayData['useEnhancedUx'] = $this->params->get('staticSocialNetworksEnhancedUx', true);
		$displayData['useShareApi']   = $this->params->get('staticSocialNetworksUseShareApi', true);
		// share API only available on HTTPS pages, fallback to regular if not HTTPS
		if (JURI::getInstance()->getScheme() !== 'https')
		{
			$displayData['useShareApi'] = false;
		}
		$displayData['url']      = $url;
		$displayData['pageInfo'] = Sh404sefFactory::getPageInfo();

		if ($displayData['type'] == 'static')
		{
			$displayData['style'] = $this->params->get('staticSocialNetworksStyle', 'squared');
			$displayData['theme'] = $this->params->get('staticSocialNetworksTheme', 'colors');
		}

		// iterate over each enabled button, if any, to build array of needed data.
		foreach ($displayData['types'] as $network)
		{
			$method = 'getButton' . ucfirst($network);
			if (method_exists(
				$this,
				$method
			))
			{
				$displayData = $this->$method(
					$displayData,
					$url,
					$context,
					$content,
					$imageSrc,
					$imageDesc,
					$isTag
				);
			}
		}

		// perform replace
		if (!empty($displayData['buttons']))
		{
			/**
			 * Filter the static sharing buttons data just before it's used to display them.
			 *
			 * @api
			 * @package sh404SEF\filter\output
			 * @var sh404sef_social_buttons_data
			 * @since   4.19.0
			 *
			 * @param array $displayData Entire array of data used to display sharing buttons.
			 *
			 * @return string
			 */
			$displayData = ShlHook::filter(
				'sh404sef_social_buttons_data',
				$displayData
			);

			$buttonsLayoutTypePath = $displayData['type'] == 'static' ? 'static.default.' : '';
			$buttonsHtml           = ShlMvcLayout_Helper::render(
				'com_sh404sef.social.' . $buttonsLayoutTypePath . 'wrapper',
				$displayData
			);

			// optional Facebook SDK linkage
			if ($this->_needFBSdk)
			{
				$buttonsHtml = Sh404sefHelperGeneral::addCommentedTag(
					$buttonsHtml,
					'sh404sef_tag_social_need_fb_sdk',
					'required',
					'before'
				);
			}

			// optional addition of our custom javascript for tracking and some actions.
			if ($this->_needTracking)
			{
				$buttonsHtml = Sh404sefHelperGeneral::addCommentedTag(
					$buttonsHtml,
					'sh404sef_tag_social_need_tracking',
					'required',
					'before'
				);
			}
		}
		else
		{
			$buttonsHtml = '';
		}

		return $buttonsHtml;
	}

	private function _computeUrl($url, $sefConfig, $context, $content, $isTag = false)
	{
		// if no URL, use current
		if (empty($url))
		{
			// no url set on social button tag, we should
			// use current URL, except if we are on a page
			// where this would cause the wrong url to be shared
			// try identify this condition
			if ($isTag || $this->_shouldDisplaySocialButtons($url, $sefConfig, $context, $content))
			{
				Sh404sefHelperShurl::updateShurls();
				$pageInfo = Sh404sefFactory::getPageInfo();
				if (empty($url))
				{
					$url = !$this->params->get('useShurl', true) || empty($pageInfo->shURL) ? $pageInfo->currentSefUrl
						: JURI::base() . ltrim($sefConfig->shRewriteStrings[$sefConfig->shRewriteMode], '/') . $pageInfo->shURL;
				}
			}
		}

		return $url;
	}

	private function _shouldDisplaySocialButtons(&$url, $sefConfig, $context = '', $content = null)
	{
		// if SEO off, don't do anything
		if (!$sefConfig->shMetaManagementActivated)
		{
			return false;
		}

		// check if this is an AMP page
		if (is_callable(array('wbAMP', 'isAMPRequest')))
		{
			if (wbAMP::isAMPRequest())
			{
				return false;
			}
		}

		$shouldDisplay = true;
		$updatedUrl    = '';

		// user can disable this attempt to identify possible failure
		// to select the correct url
		if (!$this->params->get('onlyDisplayOnCanonicalUrl', true))
		{
			return $shouldDisplay;
		}

		$app      = JFactory::getApplication();
		$printing = $app->input->getInt('print');
		if (!empty($printing))
		{
			return false;
		}

		// get request details
		if (empty($context))
		{
			$component = '';
			$view      = '';
		}
		else
		{
			$bits = explode('.', $context);
			if (!empty($bits))
			{
				$component = $bits[0];
				$view      = empty($bits[1]) ? $app->input->getCmd('view', '') : $bits[1];
			}
		}

		if (empty($component) && empty($view))
		{
			return false;
		}

		switch ($component)
		{
			case 'com_content':
				// only display if on an article page
				if ($view == 'article')
				{
					$id = $app->input->getInt('id', 0);
					if (!empty($content->id) && $id != $content->id && !empty($content->link))
					{
						$updatedUrl = JURI::getInstance()->toString(array('scheme', 'host')) . $content->link;
					}
				}
				else
				{
					$shouldDisplay = false;
				}
				// check category
				if ($shouldDisplay)
				{
					$cats  = $this->params->get('enabledCategories', array());
					$catid = null;
					if (!empty($cats) && ($cats[0] != 'show_on_all'))
					{
						// find about article category
						if (!empty($content))
						{
							// we have article details
							$catid = empty($content->catid) ? 0 : (int) $content->catid;
						}
						else
						{
							// no article details, use request
							$catid = $app->input->getInt('catid');
						}
						if (empty($catid))
						{
							if (!empty($content) && !empty($content->id))
							{
								$article = JTable::getInstance('content');
								$article->load($content->id);
								$catid = !empty($article->catid) ? (int) $article->id : 0;
							}
						}
						if (!empty($catid))
						{
							$shouldDisplay = in_array($catid, $cats);
						}
					}
				}
				break;
			case 'com_k2':
				$shouldDisplay = $view == 'item';
				break;
			default:
				break;
		}

		if (!empty($updatedUrl) && $shouldDisplay)
		{
			$url = $updatedUrl;
		}

		return $shouldDisplay;
	}

	/**
	 * Insert appropriate script links into document
	 */
	private function _insertSocialLinks(&$page, $sefConfig)
	{
		$headLinks   = '';
		$bottomLinks = '';

		// what do we must link to
		$showFb        = strpos($page, '<div class="fb-"') !== false || strpos($page, '<fb:') !== false;
		$showTwitter   = strpos($page, '<a href="https://twitter.com/share"') !== false;
		$showPinterest = strpos($page, 'class="pin-it-button"') !== false;
		$showLinkedin  = strpos($page, '//platform.linkedin.com/in.js') !== false;

		// handle caching
		if (!$this->_needTracking)
		{
			// is there a stored marker that tells us to insert the FB SDK?
			$needTracking = Sh404sefHelperGeneral::getCommentedTag(
				$page,
				'sh404sef_tag_social_need_tracking'
			);
			$needTracking = wbArrayGet($needTracking, 0, '');
			if ('required' == $needTracking)
			{
				$this->_needTracking = true;
			}
		}

		// insert social tracking javascript
		if ($this->_needTracking && ($showFb || $showTwitter || $showPinterest))
		{
			// G! use underscore in language tags
			$headLinks .= "\n<script src='" . JURI::base(true) . '/plugins/sh404sefcore/sh404sefsocial/sh404sefsocial.js'
				. "' type='text/javascript' ></script>";
			$headLinks .= "\n<script type='text/javascript'>
      _sh404sefSocialTrack.options = {enableGoogleTracking:" . ($this->params->get('enableGoogleSocialEngagement') ? 'true' : 'false')
				. ",
      enableAnalytics:" . ($this->params->get('enableSocialAnalyticsIntegration') && Sh404sefHelperAnalytics::isEnabled() ? 'true' : 'false')
				. ", trackerName:''};
      window.fbAsyncInit = _sh404sefSocialTrack.setup;
      </script>";
		}

		// twitter share
		if ($showTwitter)
		{
			$bottomLinks .= ShlMvcLayout_Helper::render('com_sh404sef.social.twitter_script');
		}

		// pinterest
		if ($showPinterest)
		{
			$headLinks .= ShlMvcLayout_Helper::render('com_sh404sef.social.pinterest_script');
		}

		if ($this->_needTracking && ($showFb || $showTwitter || $showPinterest || $showLinkedin))
		{
			// add our wrapping css
			$headLinks .= ShlMvcLayout_Helper::render(
				'com_sh404sef.social.css'
			);
		}

		if ($this->params->get('buttonsType', 'static') == 'static')
		{
			$fontSizeUser = $this->params->get('staticSocialNetworksButtonsSize', 'medium');
			// convert to actual CSS unit
			$fontSize = self::$buttonsSize[$fontSizeUser];
			/**
			 * Filter the static sharing buttons base size.
			 *
			 * @api
			 * @package sh404SEF\filter\output
			 * @var sh404sef_redirect_alias
			 * @since   4.19.0
			 *
			 * @param string $fontSize The base font size in CSS unit (ie: 12px, 1.1rem, 2 em)
			 *
			 * @return string
			 */
			$fontSize = ShlHook::filter(
				'sh404sef_social_buttons_base_font_size',
				$fontSize
			);
			// add our wrapping css
			$headLinks .= ShlMvcLayout_Helper::render(
				'com_sh404sef.social.static.default.css',
				array(
					'base_font_size' => $fontSize,
					'theme'          => $this->params->get('staticSocialNetworksTheme', 'colors')
				)
			);

			// optional javascript
			if (
				$this->params->get('staticSocialNetworksEnhancedUx', true)
				||
				$this->params->get('staticSocialNetworksUseShareApi', true)
			)
			{
				// only use share api on mobile devices. On desktop,
				// the sharing abilities are very limited on most machines
				$shouldUseShareApi = $this->params->get('staticSocialNetworksUseShareApi', true);
				$browser           = new \Joomla\CMS\Environment\Browser();
				$shouldUseShareApi = $shouldUseShareApi && $browser->isMobile();
				$bottomLinks       .= ShlMvcLayout_Helper::render(
					'com_sh404sef.social.static.default.js',
					array(
						'use_enhanced_ux' => $this->params->get('staticSocialNetworksEnhancedUx', true) ? 'true' : 'false',
						'use_share_api'   => $shouldUseShareApi ? 'true' : 'false'
					)
				);
			}

			if (
				false // does not appear needed, not used by Web Share API
				&&
				$this->params->get('staticSocialNetworksUseShareApi', true)
				&&
				$this->params->get('enableTweet', true)
				&&
				$this->params->get('viaAccount', '')
			)
			{
				$headLinks .= '<link rel="me" href="https://twitter.com/'
					. ShlSystem_Strings::escapeAttr(
						wbLTrim(
							$this->params->get('viaAccount'),
							'@'
						)
					)
					. '">';
			}
		}
		// actually insert
		if (!empty($headLinks))
		{
			$headLinks .= "\n<script type='text/javascript'>var _sh404SEF_live_site = '" . JURI::base() . "';</script>\n";

			// insert everything in page
			$page = shInsertCustomTagInBuffer($page, '</head>', 'before', $headLinks, $firstOnly = 'first');
		}

		if (!empty($bottomLinks))
		{
			// insert everything in page
			$page = shInsertCustomTagInBuffer($page, '</body>', 'before', $bottomLinks, $firstOnly = 'first');
		}
	}

	/**
	 * Whether sharing buttons should be inserted before or after content, based
	 * on settings and the presence of specific tags
	 * @param string $page
	 *
	 * @return bool
	 */
	private function shouldInsertButtonsAroundContent(&$page)
	{
		// are we in the backend - that would be a mistake
		if (!defined('SH404SEF_IS_RUNNING') || JFactory::getApplication()->isAdmin())
		{
			return false;
		}

		if ($this->hasDisableTag($page))
		{
			return false;
		}

		// check if this is an AMP page
		if (is_callable(array('wbAMP', 'isAMPRequest')))
		{
			if (wbAMP::isAMPRequest())
			{
				return false;
			}
		}

		// don't display on errors
		$pageInfo = Sh404sefFactory::getPageInfo();
		if (!empty($pageInfo->httpStatus) && $pageInfo->httpStatus == 404)
		{
			return false;
		}

		return true;
	}

	public function onContentBeforeDisplay($context, &$row, &$params, $page = 0)
	{
		if (!empty($row->text) && !$this->shouldInsertButtonsAroundContent($row->text))
		{
			return '';
		}

		if ($this->params->get('buttonsContentLocation', 'onlyTags') == 'before')
		{
			$buttons = $this->_sh404sefGetSocialButtons(Sh404sefFactory::getConfig(), $url = '', $context, $row);
		}
		else
		{
			$buttons = '';
		}

		return $buttons;
	}

	public function onContentAfterDisplay($context, &$row, &$params, $page = 0)
	{
		if (!empty($row->text) && !$this->shouldInsertButtonsAroundContent($row->text))
		{
			return '';
		}

		if ($this->params->get('buttonsContentLocation', 'onlyTags') == 'after')
		{
			$buttons = $this->_sh404sefGetSocialButtons(Sh404sefFactory::getConfig(), $url = '', $context, $row);
		}
		else
		{
			$buttons = '';
		}

		return $buttons;
	}

	/**
	 * Checks (and remove) the presence of a specific tag in content meant
	 * to prevent the display of social sharing buttons.
	 *
	 * @param string $page
	 *
	 * @return bool
	 */
	private function hasDisableTag(&$page)
	{
		// don"t show button if specific tag is present on page
		if (wbContains($page, '{sh404sef_social_buttons_disable}'))
		{
			$page = str_replace(
				'{sh404sef_social_buttons_disable}',
				'',
				$page
			);
			return true;
		}

		return false;
	}

	/**
	 * Insert facebook javascript if it was determined earlier it's needed.
	 *
	 * @param string $page
	 * @param Object $sefConfig
	 */
	public function onSh404sefInsertFBJavascriptSDK(&$page, $sefConfig)
	{
		static $_inserted = false;

		if ($this->hasDisableTag($page))
		{
			return;
		}

		if ($sefConfig->shMetaManagementActivated && !$_inserted
			&& ($this->params->get('enableFbLike', true) || $this->params->get('enableFbSend', true) || $this->params->get('enableFbShare', true))
		)
		{
			// handle caching
			if (!$this->_needFBSdk)
			{
				// is there a stored marker that tells us to insert the FB SDK?
				$needDBSdk = Sh404sefHelperGeneral::getCommentedTag(
					$page,
					'sh404sef_tag_social_need_fb_sdk'
				);
				$needDBSdk = wbArrayGet($needDBSdk, 0, '');
				if ('required' == $needDBSdk)
				{
					$this->_needFBSdk = true;
				}
			}

			if ($this->_needFBSdk)
			{
				$_inserted = true;

				// append Facebook SDK
				$socialSnippet = ShlMvcLayout_Helper::render(
					'com_sh404sef.social.fb_sdk',
					array(
						'languageTag' => $this->_underscoredLanguageTag,
						'appId'       => empty($sefConfig->fbAppId) ? Sh404sefFactory::getPConfig()->facebookDefaultAppId : $sefConfig->fbAppId
					)

				);

				// use page rewrite utility function to insert as needed
				$page = shPregInsertCustomTagInBuffer($page, '<\s*body[^>]*>', 'after', $socialSnippet, $firstOnly = 'first');
			}
		}
	}

	/**
	 * Build Twitter sharing button.
	 *
	 * @param array  $displayData
	 * @param string $url
	 * @param string $context
	 * @param string $content
	 * @param string $imageSrc
	 * @param string $imageDesc
	 * @param bool   $isTag
	 *
	 * @return array
	 */
	protected function getButtonTwitter($displayData, $url, $context, $content, $imageSrc, $imageDesc, $isTag)
	{
		if (!$this->params->get('enableTweet', true))
		{
			unset($displayData['types'][array_search('twitter', $displayData['types'])]);

			return $displayData;
		}

		$displayData['buttons']['twitter'] = array(
			'viaAccount'  => wbLTrim(
				$this->params->get('viaAccount', ''),
				'@'
			),
			'url'         => $url,
			'languageTag' => $this->_shortLanguageCode,
			'static_text' => $this->params->get('static_text_twitter', false) ?
				JText::_('PLG_SH404SEFCORE_SH404SEFSOCIAL_STATIC_BUTTON_TEXT_SHARE_TWITTER')
				:
				'',
		);

		$this->_needTracking = $displayData['type'] != 'static';

		return $displayData;
	}

	/**
	 * Build Pinterest sharing button.
	 *
	 * @param array  $displayData
	 * @param string $url
	 * @param string $context
	 * @param string $content
	 * @param string $imageSrc
	 * @param string $imageDesc
	 * @param bool   $isTag
	 *
	 * @return array
	 */
	protected function getButtonPinterestpinit($displayData, $url, $context, $content, $imageSrc, $imageDesc, $isTag)
	{
		if (!$this->params->get('enablePinterestPinIt', 1))
		{
			unset($displayData['types'][array_search('pinterestpinit', $displayData['types'])]);
			return $displayData;
		}

		// Pinterest
		// we use either the first image in content, or the provided one (from a user created tag)
		if (empty($imageSrc))
		{
			// we're using the first image in the content
			$regExp = '#<img([^>]*)/>#ius';
			if (!is_object($content))
			{
				$text = $content;
			}
			else
			{
				$text = empty($content->fulltext) ? (empty($content->introtext) ? '' : $content->introtext) : $content->introtext
					. $content->fulltext;
			}
			$img = preg_match($regExp, $text, $match);
			if (empty($img) || empty($match[1]))
			{
				// could not find an image in the article
				// last chance is maybe webmaster is using Joomla! full text image article feature
				// note: if we are not on the canonical page (ie the full article display), Joomla!
				// uses the image_intro instead. However, I decided to still pin the full image
				// in such case, as the image_intro will most often be a thumbnail
				// Is this correct? can there be side effects?
				$imageSrc = '';
				if ($context == 'com_content.article' && !empty($content->images))
				{
					$registry = new JRegistry;
					$registry->loadString($content->images);
					$fulltextImage = $registry->get('image_fulltext');
					if (!empty($fulltextImage))
					{
						$imageSrc  = $fulltextImage;
						$imageDesc = $registry->get('image_fulltext_alt', '');
					}
				}
				else if ($context == 'com_k2.item')
				{
					// handle K2 images feature
					if (!empty($content->imageMedium))
					{
						$imageSrc  = JURI::root() . str_replace(JURI::base(true) . '/', '', $content->imageMedium);
						$imageDesc = $content->image_caption;
					}
				}
			}
			else
			{
				// extract image details
				jimport('joomla.utilities.utility');
				$attributes = JUtility::parseAttributes($match[1]);
				$imageSrc   = empty($attributes['src']) ? '' : $attributes['src'];
				$imageDesc  = empty($attributes['alt']) ? '' : $attributes['alt'];
			}
		}
		if (!empty($imageSrc))
		{
			if (substr($imageSrc, 0, 7) != 'http://' && substr($imageSrc, 0, 8) != 'https://' && substr($imageSrc, 0, 2) != '//')
			{
				// relative url, prepend root url
				$imageSrc = JURI::base() . JString::ltrim($imageSrc, '/');
			}
			$displayData['buttons']['pinterest']                     = array();
			$displayData['buttons']['pinterest']['url']              = $url;
			$displayData['buttons']['pinterest']['imageSrc']         = $imageSrc;
			$displayData['buttons']['pinterest']['imageDesc']        = $imageDesc;
			$displayData['buttons']['pinterest']['pinItCountLayout'] = $this->params->get('pinItCountLayout', 'none');
			$displayData['buttons']['pinterest']['pinItButtonText']  = $this->params->get('pinItButtonText', 'Pin it');
			$displayData['buttons']['pinterest']['static_text']      = $this->params->get('static_text_pinterest', false) ?
				JText::_('PLG_SH404SEFCORE_SH404SEFSOCIAL_STATIC_BUTTON_TEXT_SHARE_PINTERESTPINIT')
				:
				'';

			$this->_needTracking = $displayData['type'] != 'static';
		}

		return $displayData;
	}

	/**
	 * Build Facebook Like sharing button.
	 *
	 * @param array  $displayData
	 * @param string $url
	 * @param string $context
	 * @param string $content
	 * @param string $imageSrc
	 * @param string $imageDesc
	 * @param bool   $isTag
	 *
	 * @return array
	 */
	protected function getButtonFacebooklike($displayData, $url, $context, $content, $imageSrc, $imageDesc, $isTag)
	{
		if (
			!$this->params->get('enableFacebook', 1)
			||
			!$this->params->get('enableFbLike', 1)
			||
			$displayData['type'] == 'static'
		)
		{
			unset($displayData['types'][array_search('facebooklike', $displayData['types'])]);

			return $displayData;
		}

		$layout                  = $this->params->get('fbLayout', '') == 'none' ? '' : $this->params->get('fbLayout', '');
		$fbData                  = array();
		$fbData['fbLayout']      = $layout;
		$fbData['url']           = $url;
		$fbData['fbAction']      = $this->params->get('fbAction', '');
		$fbData['fbWidth']       = $this->params->get('fbWidth', '');
		$fbData['fbShowFaces']   = $this->params->get('fbShowFaces', 'true');
		$fbData['fbColorscheme'] = $this->params->get('fbColorscheme', 'light');
		if ($this->params->get('fbUseHtml5', true))
		{
			$displayData['buttons']['fb-like-html5'] = $fbData;
		}
		else
		{
			$displayData['buttons']['fb-like'] = $fbData;
		}

		$this->_needFBSdk    = $displayData['type'] != 'static';
		$this->_needTracking = $displayData['type'] != 'static';

		return $displayData;
	}

	/**
	 * Build Facebook send sharing button.
	 *
	 * @param array  $displayData
	 * @param string $url
	 * @param string $context
	 * @param string $content
	 * @param string $imageSrc
	 * @param string $imageDesc
	 * @param bool   $isTag
	 *
	 * @return array
	 */
	protected function getButtonFacebooksend($displayData, $url, $context, $content, $imageSrc, $imageDesc, $isTag)
	{
		if (
			!$this->params->get('enableFacebook', 1)
			||
			!$this->params->get('enableFbSend', 1)
			||
			$displayData['type'] == 'static'
		)
		{
			unset($displayData['types'][array_search('facebooksend', $displayData['types'])]);

			return $displayData;
		}

		// FB Send
		$fbData                  = array();
		$fbData['url']           = $url;
		$fbData['fbColorscheme'] = $this->params->get('fbColorscheme', 'light');

		if ($this->params->get('fbUseHtml5', true))
		{
			$displayData['buttons']['fb-send-html5'] = $fbData;
		}
		else
		{
			$displayData['buttons']['fb-send'] = $fbData;
		}
		$this->_needFBSdk    = $displayData['type'] != 'static';
		$this->_needTracking = $displayData['type'] != 'static';

		return $displayData;
	}

	/**
	 * Build Facebook Share sharing button.
	 *
	 * @param array  $displayData
	 * @param string $url
	 * @param string $context
	 * @param string $content
	 * @param string $imageSrc
	 * @param string $imageDesc
	 * @param bool   $isTag
	 *
	 * @return array
	 */
	protected function getButtonFacebookshare($displayData, $url, $context, $content, $imageSrc, $imageDesc, $isTag)
	{
		if (!$this->params->get('enableFacebook', 1))
		{
			unset($displayData['types'][array_search('facebookshare', $displayData['types'])]);

			return $displayData;
		}

		if (
			$displayData['type'] != 'static'
			&&
			!$this->params->get('enableFbShare', 1)
		)
		{
			unset($displayData['types'][array_search('facebookshare', $displayData['types'])]);

			return $displayData;
		}

		// FB Share
		if ($displayData['type'] == 'static')
		{
			$displayData['buttons']['facebookshare']                = array();
			$displayData['buttons']['facebookshare']['static_text'] = $this->params->get('static_text_facebookshare', false) ?
				JText::_('PLG_SH404SEFCORE_SH404SEFSOCIAL_STATIC_BUTTON_TEXT_SHARE_FACEBOOKSHARE')
				:
				'';
		}
		else
		{
			$fbData             = array();
			$fbData['url']      = $url;
			$fbData['fbLayout'] = $this->params->get('fbShareLayout', 'button_count');

			if ($this->params->get('fbUseHtml5', true))
			{
				$displayData['buttons']['fb-share-html5'] = $fbData;
			}
			else
			{
				$displayData['buttons']['fb-share'] = $fbData;
			}
			$this->_needFBSdk    = true;
			$this->_needTracking = true;
		}

		return $displayData;
	}

	/**
	 * Build LinkedIn sharing button.
	 *
	 * @param array  $displayData
	 * @param string $url
	 * @param string $context
	 * @param string $content
	 * @param string $imageSrc
	 * @param string $imageDesc
	 * @param bool   $isTag
	 *
	 * @return array
	 */
	protected function getButtonLinkedin($displayData, $url, $context, $content, $imageSrc, $imageDesc, $isTag)
	{
		if (!$this->params->get('enableLinkedIn', true))
		{
			unset($displayData['types'][array_search('linkedin', $displayData['types'])]);

			return $displayData;
		}

		$displayData['buttons']['linkedin'] = array(
			'loadScript'  => !$this->_linkedinScriptLoaded,
			'url'         => $url,
			'languageTag' => $this->_underscoredLanguageTag,
			'layout'      => $this->params->get('linkedinlayout', 'none'),
			'static_text' => $this->params->get('static_text_linkedin', false) ?
				JText::_('PLG_SH404SEFCORE_SH404SEFSOCIAL_STATIC_BUTTON_TEXT_SHARE_LINKEDIN')
				:
				''
		);
		$this->_linkedinScriptLoaded        = $displayData['type'] != 'static';
		$this->_needTracking                = $displayData['type'] != 'static';

		return $displayData;
	}

	/**
	 * Build WhatsApp sharing button.
	 *
	 * @param array  $displayData
	 * @param string $url
	 * @param string $context
	 * @param string $content
	 * @param string $imageSrc
	 * @param string $imageDesc
	 * @param bool   $isTag
	 *
	 * @return array
	 */
	protected function getButtonWhatsapp($displayData, $url, $context, $content, $imageSrc, $imageDesc, $isTag)
	{
		if (!$this->params->get('enableWhatsapp', true))
		{
			unset($displayData['types'][array_search('whatsapp', $displayData['types'])]);

			return $displayData;
		}

		$displayData['buttons']['whatsapp'] = array(
			'title'       => '',
			'url'         => $url,
			'static_text' => $this->params->get('static_text_whatsapp', false) ?
				JText::_('PLG_SH404SEFCORE_SH404SEFSOCIAL_STATIC_BUTTON_TEXT_SHARE_WHATSAPP')
				:
				''
		);

		return $displayData;
	}
}
