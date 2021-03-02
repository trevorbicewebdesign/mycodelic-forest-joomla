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
<div class="sh404sef-analytics-rendering-area" id="sh404sef-analytics-wrapper">
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

            <div class="analyticscontent_container analyticscontent_visits_container">
                <div class="analyticscontent_title analyticscontent_title_visits">
					<?php echo $analyticsHelper->getReportTitle('visits'); ?>
                </div>
                <div class="analyticscontent analyticscontent_visits sh404sef-loading"
                     id="analyticscontent_graph_visits"></div>
            </div>

            <div class="analyticscontent_container analyticscontent_perf_container">
                <div class="analyticscontent_title analyticscontent_title_perf">
					<?php echo $analyticsHelper->getReportTitle('perf'); ?>
                </div>
                <div class="analyticscontent analyticscontent_perf sh404sef-loading"
                     id="analyticscontent_graph_perf"></div>
            </div>

            <div class="analyticscontent_container analyticscontent_traffic_container">
                <div class="analyticscontent_title analyticscontent_title_traffic">
					<?php echo $analyticsHelper->getReportTitle('traffic'); ?>
                </div>

                <div class="analyticscontent_sub_containers">
                    <div class="analyticscontent_sub_container analyticscontent_sources_container">
                        <div class="analyticscontent analyticscontent_sources sh404sef-loading"
                             id="analyticscontent_graph_sources"></div>
                    </div>

                    <div class="analyticscontent_sub_container analyticscontent_devices_container">
                        <div class="analyticscontent analyticscontent_devices sh404sef-loading"
                             id="analyticscontent_graph_devices"></div>
                    </div>

                    <div class="analyticscontent_sub_container analyticscontent_social_container">
                        <div class="analyticscontent analyticscontent_social sh404sef-loading"
                             id="analyticscontent_graph_social"></div>
                    </div>

                    <div class="analyticscontent_sub_container analyticscontent_geo_container">
                        <div class="analyticscontent analyticscontent_geo sh404sef-loading"
                             id="analyticscontent_graph_geo"></div>
                    </div>

                </div>
            </div>

            <div class="analyticscontent_container analyticscontent_topurls_container">
                <div class="analyticscontent_title analyticscontent_title_topurls">
					<?php echo $analyticsHelper->getReportTitle('topurls'); ?>
                </div>
                <div class="analyticscontent analyticscontent_topurls sh404sef-loading"
                     id="analyticscontent_graph_topurls"></div>
            </div>

            <div class="analyticscontent_container analyticscontent_topreferrers_container">
                <div class="analyticscontent_title analyticscontent_title_topreferrers">
					<?php echo $analyticsHelper->getReportTitle('topreferrers'); ?>
                </div>
                <div class="analyticscontent analyticscontent_topreferrers sh404sef-loading"
                     id="analyticscontent_graph_topreferrers"></div>
            </div>
        </div>
		<?php
		echo LayoutHelper::render(
			'com_sh404sef.analytics.filters',
			array_merge(
				array(
					'position' => 'bottom'
				),
				$this->getDisplayData()
			),
			SH404SEF_LAYOUTS_PATH
		);

	endif;
	?>
</div>
