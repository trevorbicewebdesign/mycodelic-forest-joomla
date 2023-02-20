<?php

/**
* Fit_1 Portal Mode
* @package News Show Pro GK5
* @Copyright (C) 2009-2020 Gavick.com
* @ All rights reserved
* @ Joomla! is Free Software
* @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
* @version $Revision: GK5 1.6.2 $
**/

// access restriction
defined('_JEXEC') or die('Restricted access');

$document = JFactory::getDocument();

$document->addStyleSheet('modules/mod_news_pro_gk5/tmpl/portal_modes/fit_1/slick/slick.css');
$document->addScript('modules/mod_news_pro_gk5/tmpl/portal_modes/fit_1/slick/slick.min.js');

class NSP_GK5_FIT_1 {
	// necessary class fields
	private $parent;
	private $mode;

	// constructor
	function __construct($parent) {

		$this->parent = $parent;
		// detect the supported Data Sources
		if(stripos($this->parent->config['data_source'], 'com_content_') !== FALSE) {
			$this->mode = 'com_content';
		} else if(stripos($this->parent->config['data_source'], 'k2_') !== FALSE) {
			$this->mode = 'com_k2';
		} else {
			$this->mode = false;
		}
	}

	// static function which returns amount of articles to render - VERY IMPORTANT!!
	static function amount_of_articles($parent) {
		return ($parent->config['news_column'] * $parent->config['news_rows'] * $parent->config['news_full_pages']);
	}

	// Get Custom Fields
	public function getCustomFields($id, $context) {
		if ($context == 'article')
		$context = 'com_content.article';

		$currentLanguage = JFactory::getLanguage();
		$currentTag = $currentLanguage->getTag();

		$sql = 'SELECT fv.value, fg.title AS gtitle, f.title AS ftitle, f.name
				FROM #__fields_values fv
				LEFT JOIN #__fields f ON fv.field_id = f.id
				LEFT JOIN #__fields_groups fg ON fg.id = f.group_id
				WHERE fv.item_id = '.$id.'
				AND f.context = "'.$context.'"
				AND f.language IN ("*", "'.$currentTag.'")
				AND f.access = 1
				';
			// echo $sql;
		$db = JFactory::getDbo();
		$db->setQuery($sql);
		$result = $db->loadObjectList();
		$arr = array();
		foreach ($result AS $r) {
			$arr[$r->name] = $r->value;
		}

		return $arr;
	}

	// output generator
	function output() {
    // call from source controller.
    if(!class_exists('NSP_GK5_'.$this->parent->source.'_Controller')) {
        require_once (dirname(__FILE__).'/../../../data_sources'.DS.$this->parent->source.DS.'controller.php');
    }
    //
    if(!class_exists('NSP_GK5_'.$this->parent->source.'_View')) {
        require_once(JModuleHelper::getLayoutPath('mod_news_pro_gk5', $this->parent->source.'/view'));
    }
    /** GENERATING FINAL XHTML CODE START **/
    // always set the link amount = 0;
    $this->parent->config['news_short_pages'] = 0;
    $this->parent->params->set('news_short_pages', 0);
    $this->parent->config['links_columns_amount'] = 0;
    $this->parent->params->set('links_columns_amount', 0);
    $this->parent->config['links_amount'] = 0;
    $this->parent->params->set('links_amount', 0);

    $module_id = $this->parent->module_id;

    $news_column = $this->parent->config['news_column'];
    $controller_class = 'NSP_GK5_'.$this->parent->source.'_Controller';
    $controller = new $controller_class();
    $controller_data = $controller->initialize($this->parent->config, $this->parent->content);

    $news_html_tab = $controller_data['arts'];
    $news_featured_tab = $controller_data['featured'];
    $news_html_tab_amount = count($news_html_tab);

    $news_config_json = '{
			"animation_speed": '.($this->parent->config['animation_speed']).',
			"animation_interval": '.($this->parent->config['animation_interval']).',
			"animation_function": "'.($this->parent->config['animation_function']).'",
			"news_column": '.($this->parent->config['news_column']).',
			"news_rows": '.($this->parent->config['news_rows']).',
			"links_columns_amount": '.($this->parent->config['links_columns_amount']).',
			"links_amount": '.($this->parent->config['links_amount']).'
		}';

		//
		$news_config_json = str_replace('"', '\'', $news_config_json);

  	$contentarr = array_merge($controller_data['arts'], $controller_data['featured']);

		// main wrapper
		echo '<div id="' . $module_id . '" class="nspMain gkNspPM gkNspPM-Fit_1" data-config="'.$news_config_json.'">';

		if(!empty($this->parent->config['nsp_pre_text']) && trim($this->parent->config['nsp_pre_text'])) {
			echo $this->parent->config['nsp_pre_text'];
		}

		$items = [];
		for($i = 0; $i < count($contentarr); $i++) {
      // new data.
			$html = '';
			$html .= '<div class="col nspArt nspCol';
			$html .= $this->parent->config['news_column'];
			// $html .= (round($news_html_tab_amount/$this->parent->config['news_column']) == $nrow ) ? ' lastChild' : '';
			$html .= (isset($news_featured_tab[$i]) && $news_featured_tab[$i] == '1') ? ' nspFeatured' : '';
			$html .= '">';
			$html .= '<div class="nspArt-inner"';
			$html .= ' style="padding:';
			$html .= $this->parent->config['art_padding'];
			$html .= ';"';
			$html .= '>';
			$html .= $contentarr[$i];
			$html .= '</div></div>';

			$items[] = $html;
		}

		echo '<div class="row equal-height equal-height-child">';
	  	echo implode(' ', $items);
		echo '</div>';
		echo '<div class="slick-control' . (($this->parent->config['top_interface_style'] !== 'none') ? ' sight' : '') . '"></div>';

		if(isset($this->parent->config['articles_link']) && $this->parent->config['articles_link'] == '1') {
			$article_bottom_url = $this->parent->config['articles_link_url'];

			echo '<div class="readon-button-wrap text-center">';
			echo '<a href="' . $article_bottom_url . '" class="readon-button">';
				if($this->parent->config['articles_link_label'] != '') {
					echo $this->parent->config['articles_link_label'];
				}
				else {
					echo JText::_('MOD_NEWS_PRO_GK5_ARTICLES_LINK_LABEL_DEFAULT');
				}
			echo ' <span class="fa fa-long-arrow-right"></span></a>';
			echo '</div>';
		}

		if(!empty($this->parent->config['nsp_post_text']) && trim($this->parent->config['nsp_post_text'])) {
			echo $this->parent->config['nsp_post_text'];
		}
		// closing main wrapper
		echo '</div>';
		?>

		<script type="text/javascript">
	    jQuery(document).ready(function(){
	      jQuery('#<?php echo $module_id; ?> .equal-height').slick({
	        appendArrows: '#<?php echo $module_id; ?> .slick-control',
	        appendDots: '#<?php echo $module_id; ?> .slick-control',

	      	<?php if ($this->parent->config['top_interface_style'] == 'pagination' || $this->parent->config['top_interface_style'] == 'arrows_with_pagination') : ?>
	        pauseOnDotsHover: <?php echo ($this->parent->config['hover_anim'] == 1) ? 'true' : 'false'; ?> ,
	      	<?php endif; ?>

	        arrows: <?php echo ($this->parent->config['top_interface_style'] == 'arrows' || $this->parent->config['top_interface_style'] == 'arrows_with_pagination') ? 'true' : 'false'; ?>,

	        autoplay: <?php echo ($this->parent->config['autoanim'] == 1) ? 'true' : 'false'; ?>,
	        infinite: <?php echo ($this->parent->config['autoanim'] == 1) ? 'true' : 'false'; ?>,

	        <?php if ($this->parent->config['autoanim'] == 1) : ?>
	        autoplaySpeed: <?php echo $this->parent->config['animation_interval'] ?>,
	        speed: <?php echo $this->parent->config['animation_speed'] ?>,
	      	<?php endif; ?>

	        dots: <?php echo ($this->parent->config['top_interface_style'] == 'pagination' || $this->parent->config['top_interface_style'] == 'arrows_with_pagination') ? 'true' : 'false'; ?>,
	        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
	        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
	        rows: <?php echo $this->parent->config['news_rows']; ?>,
	        slidesToShow: <?php echo $this->parent->config['news_column']; ?>,

	        responsive: [
				    {
				      breakpoint: 992,
				      settings: {
				      	dots: true,
				        slidesToShow: 2,
				      }
				    },
				    {
				      breakpoint: 576,
				      settings: {
				      	dots: true,
				        slidesToShow: 1,
				      }
				    }
				    // You can unslick at a given breakpoint now by adding:
				    // settings: "unslick"
				    // instead of a settings object
				  ]
	      });
	    });
	  </script>

	<?php
	}
	// function used to retrieve the item URL
	function get_link($num) {
		if($this->mode == 'com_content') {
			// load necessary com_content View class
			if(!class_exists('NSP_GK5_com_content_View')) {
				require_once(JModuleHelper::getLayoutPath('mod_news_pro_gk5', 'com_content/view'));
			}
			return NSP_GK5_com_content_View::itemLink($this->parent->content[$num], $this->parent->config);
		} else if($this->mode == 'com_k2') {
			// load necessary k2 View class
			if(!class_exists('NSP_GK5_com_k2_View')) {
				require_once(JModuleHelper::getLayoutPath('mod_news_pro_gk5', 'com_k2/view'));
			}
			return NSP_GK5_com_k2_View::itemLink($this->parent->content[$num], $this->parent->config);
		} else {
			return false;
		}
	}

	// author generator
	function get_author($num) {
		$item = $this->parent->content[$num];
		return (trim(htmlspecialchars($item['author_alias'])) != '') ? htmlspecialchars($item['author_alias']) : htmlspecialchars($item['author_username']);
	}

	// image generator
	function get_image($num) {
		// used variables
		$url = false;
		$output = '';
		// select the proper image function
		if($this->mode == 'com_content') {
			// load necessary com_content View class
			if(!class_exists('NSP_GK5_com_content_View')) {
				require_once(JModuleHelper::getLayoutPath('mod_news_pro_gk5', 'com_content/view'));
			}
			// generate the com_content image URL only
			$url = NSP_GK5_com_content_View::image($this->parent->config, $this->parent->content[$num], true, true);
		} else if($this->mode == 'com_k2') {
			// load necessary k2 View class
			if(!class_exists('NSP_GK5_com_k2_View')) {
				require_once(JModuleHelper::getLayoutPath('mod_news_pro_gk5', 'com_k2/view'));
			}
			// generate the EasyBlog image URL only
			$url = NSP_GK5_com_k2_View::image($this->parent->config, $this->parent->content[$num], true, true);
		}
		// check if the URL exists
		if($url === FALSE) {
			return false;
		} else {
			// if URL isn't blank - return it!
			if($url != '') {
				return $url;
			} else {
				return false;
			}
		}
	}
}

// EOF
