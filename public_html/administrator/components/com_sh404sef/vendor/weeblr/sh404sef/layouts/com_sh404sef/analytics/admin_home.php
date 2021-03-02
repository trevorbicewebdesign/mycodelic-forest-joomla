<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier - Weeblr llc - 2020
 * @package     sh404SEF
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     4.21.0.4206
 * @date        2020-06-26
 */

use Weeblr\Wblib\V_SH4_4206\Mvc\LayoutHelper;

// Security check to ensure this file is being included by a parent file.
defined('WBLIB_EXEC') || die();

$errors          = $this->getAsArray('errors');
$analyticsHelper = $this->factory->getA('Weeblr\Sh404sef\Helper\Analytics');

?>
<div class="sh404sef-analytics-rendering-area sh404sef-analytics-rendering-area-admin-home"
     id="sh404sef-analytics-wrapper">
    <div class="sh404sef-analytics-errors_container <?php echo empty($errors) ? '' : 'sh404sef-visible'; ?>"
         id="sh404sef-analytics-errors_container">
		<?php
		if (!empty($errors)):
			foreach ($errors as $error) :
				echo $this->escape($error);
			endforeach;
		endif; ?>
    </div>
	<?php
	if (empty($errors)):

		echo LayoutHelper::render(
			'com_sh404sef.analytics.filters',
			array_merge(
				array(
					'position' => 'top'
				),
				$this->getDisplayData()
			),
			SH404SEF_LAYOUTS_PATH
		);
		?>
        <div class="sh404sef-analytics-graphs" id="sh404sef-analytics-graphs">

            <div class="analyticscontent_container analyticscontent_global_container">
                <div class="analyticscontent analyticscontent_global sh404sef-loading"
                     id="analyticscontent_graph_global">
                </div>
            </div>

            <div class="analyticscontent_container analyticscontent_update_button_container center">
				<?php echo Sh404sefHelperAnalytics::updateButton(false); ?>
            </div>

            <div class="analyticscontent_container analyticscontent_visits_container">
                <div class="analyticscontent_title analyticscontent_title_visits">
					<?php echo $analyticsHelper->getReportTitle('visits'); ?>
                </div>
                <div class="analyticscontent analyticscontent_visits sh404sef-loading"
                     id="analyticscontent_graph_visits"></div>
            </div>

        </div>
	<?php
	endif;
	?>
</div>
