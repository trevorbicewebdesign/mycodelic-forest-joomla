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

use Weeblr\Wblib\V_SH4_4206\Mvc\LayoutHelper;

// Security check to ensure this file is being included by a parent file.
defined('_JEXEC') || die;

JHtml::_('bootstrap.framework');
JHtml::_('formbehavior.chosen', 'select');

if (version_compare(JVERSION, '3.4', '<'))
{
	// kill the toolbar button displayed by Joomla
	// doesnt't work at low width (J! 3.0.3)
	$script = '
 				jQuery(document).ready(
 					function() {
 						var hide = function() {
 							jQuery(".btn-subhead:visible").css({display:"none"});
 						}
						jQuery(window).resize(hide);
 						hide();
 					}
 				);
 				';
	JFactory::getDocument()->addScriptDeclaration($script);
}

// prepare Analytics output
$sefConfig = Sh404sefFactory::getConfig();
try
{
	$haveAccessToken    = Sh404sefHelperAnalytics_auth::getAccessToken();
	$analyticsAvailable = Sh404sefHelperAcl::userCan('sh404sef.view.analytics') && $sefConfig->analyticsReportsEnabled && !empty($haveAccessToken);
}
catch (\Exception $e)
{
	$analyticsAvailable = false;
}

?>
<div class="row-fluid wbl-theme-default">

    <div id="shl-sidebar-container" class="span2 shl-no-margin">
        <div class="center shl-cp-logo"><img
                    src="components/com_sh404sef/assets/images/2016-05-05-sh404sef-logo-h60-margin.png"/></div>
		<?php echo $this->sidebar; ?>
    </div>

    <div id="wbl-sh404sef-cp-main" class="span6">

		<?php
		// analytics panel
		if ($analyticsAvailable)
		{
			echo LayoutHelper::render(
				'com_sh404sef.analytics.admin_home',
				$this->analyticsData,
				SH404SEF_LAYOUTS_PATH
			);
		}
		?>

        <div class="wbl-sh404sef-cp-stats">

            <div class="wbl-sh404sef-cp-stats-title">SEF URLs</div>

			<?php foreach ($this->cpStats as $rowName => $rowValues) : ?>

                <div class="wbl-sh404sef-cp-stats-row">

					<?php foreach ($rowValues as $valueName => $value) : ?>

                        <div class="wbl-sh404sef-cp-counter <?php echo $value['flag']; ?>">
							<?php if (!empty($value['link'])) : ?>
                            <a href="<?php echo $value['link']; ?>">
								<?php endif; ?>
                                <div class="wbl-sh404sef-cp-counter-inner">
								<span class="wbl-sh404sef-cp-counter-number ">
									<?php echo ShlSystem_Strings::formatIntForTitle($value['value']) ?>
								</span>
                                    <span class="wbl-sh404sef-cp-counter-title">
									<?php echo $valueName ?>
								</span>
                                </div>
								<?php if (!empty($value['link'])) : ?>
                            </a>
						<?php endif; ?>
                        </div>
					<?php endforeach; ?>

                </div>

			<?php endforeach; ?>

            <div id="wbl-sh404sef-cp-more-stats" class="wbl-sh404sef-cp-more-stats collapse">
				<?php foreach ($this->cpStatsMore as $rowName => $rowValues) : ?>

                    <div class="wbl-sh404sef-cp-stats-row">

						<?php foreach ($rowValues as $valueName => $value) : ?>

                            <div class="wbl-sh404sef-cp-counter <?php echo $value['flag']; ?>">
								<?php if (!empty($value['link'])) : ?>
								<?php endif; ?>
                                <a href="<?php echo $value['link']; ?>">
                                    <div class="wbl-sh404sef-cp-counter-inner ">
								<span class="wbl-sh404sef-cp-counter-number">
									<?php echo ShlSystem_Strings::formatIntForTitle($value['value']) ?>
								</span>
                                        <span class="wbl-sh404sef-cp-counter-title">
									<?php echo $valueName ?>
								</span>
                                    </div>
									<?php if (!empty($value['link'])) : ?>
                                </a>
							<?php endif; ?>
                            </div>

						<?php endforeach; ?>

                    </div>

				<?php endforeach; ?>
            </div>

            <button type="button" class="wbl-sh404sef-cp-more-button" data-toggle="collapse"
                    data-target="#wbl-sh404sef-cp-more-stats">
            </button>
        </div>

		<?php
		$renderedMessages = empty($this->messageList) ? '' : LayoutHelper::render('shlib.msg.list', array('msgs' => $this->messageList, 'id' => 'com_sh404sef-cp-msg-container'), SHLIB_LAYOUTS_PATH);
		$hash             = md5($renderedMessages);
		?>
        <div class="row-fluid wbl-sh404sef-cp-msg-center" data-token="<?php echo JSession::getFormToken(); ?>"
             data-msgs-hash="<?php echo $hash; ?>">
			<?php echo $renderedMessages; ?>
        </div>

    </div>

    <div id="wbl-sh404sef-control-panel-right" class="span4">
		<?php echo $this->loadTemplate($this->joomlaVersionPrefix . '_right'); ?>
    </div>

</div>

<div class="sh404sef-footer-container">
	<?php echo $this->footerText; ?>
</div>
