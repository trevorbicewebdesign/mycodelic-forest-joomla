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

use Joomla\CMS\Factory;
use Weeblr\Wblib\V_SH4_4206\Mvc\LayoutHelper;

// Security check to ensure this file is being included by a parent file.
defined('WBLIB_EXEC') || die();

$app           = Factory::getApplication();
$lang          = $app->getLanguage();
$baseUrl       = $this->get('baseUrl');
$assetsManager = $this->factory->getThe('sh404sef.assetsManager');

$themeCss = $assetsManager->getHashedMediaLink(
	'theme.default.css',
	array(
		'pathFromRoot' => 'css',
	)
);

$analyticsCss = $assetsManager->getHashedMediaLink(
	'analytics_fe.css',
	array(
		'pathFromRoot' => 'css',
	)
);

?>

<!DOCTYPE html>
<html lang="<?php echo $lang->getTag(); ?>" dir="<?php echo $lang->isRtl() ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title><?php echo $this->platform->t('COM_SH404SEF_ANALYTICS_REPORTS_TITLE'); ?></title>
    <meta name="robots" content="noindex,nofollow"/>

    <link rel="shortcut icon" href="<?php echo $baseUrl; ?>/media/com_sh404sef/assets/img/icon-48-analytics.png"/>

    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/media/system/css/fields/calendar.css" type="text/css"/>
    <link rel='stylesheet' href="<?php echo $baseUrl; ?>/media/system/css/calendar-jos.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/media/jui/css/chosen.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/media/plg_shlib/dist/css/raw/spinner.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo $themeCss; ?>"
          type="text/css"/>
    <link rel='stylesheet' href="<?php echo $analyticsCss; ?>"
          type="text/css"/>

	<?php if (!$this->hasDisplayData('errors')) : ?>

        <script src="https://www.gstatic.com/charts/loader.js" type="text/javascript"></script>

        <script src="<?php echo $baseUrl; ?>/media/system/js/mootools-core.js"></script>
        <script src="<?php echo $baseUrl; ?>/media/system/js/core.js"></script>
        <script src="<?php echo $baseUrl; ?>/media/jui/js/jquery.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/media/jui/js/jquery-noconflict.js"></script>
        <script src="<?php echo $baseUrl; ?>/media/jui/js/jquery-migrate.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/media/jui/js/chosen.jquery.min.js"></script>

        <script src="<?php echo $baseUrl; ?>/media/system/js/calendar.js"></script>
        <script src="<?php echo $baseUrl; ?>/media/system/js/calendar-setup.js"></script>
        <script src="<?php echo $baseUrl; ?>/media/system/js/fields/calendar-locales/en.js"></script>
        <script src="<?php echo $baseUrl; ?>/media/system/js/fields/calendar-locales/date/gregorian/date-helper.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/media/system/js/fields/calendar.min.js"></script>

        <script src="<?php echo $baseUrl; ?>/media/plg_shlib/dist/js/raw/spinner.js"></script>

        <script type="text/javascript">
            jQuery(function ($) {
                initChosen();

                function initChosen(event, container) {
                    container = container || document;
                    $(container).find("select").chosen({
                        "disable_search_threshold": 10,
                        "search_contains": true,
                        "allow_single_deselect": true,
                        "placeholder_text_multiple": "Type or select some options",
                        "placeholder_text_single": "Select an option",
                        "no_results_text": "No results match"
                    });
                }
            });


            Calendar._DN = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
            Calendar._SDN = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
            Calendar._FD = 0;
            Calendar._MN = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            Calendar._SMN = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
            Calendar._TT = {
                "INFO": "About the Calendar",
                "ABOUT": "DHTML Date\/Time Selector\n(c) dynarch.com 20022005 \/ Author: Mihai Bazon\nFor latest version visit: http:\/\/www.dynarch.com\/projects\/calendar\/\nDistributed under GNU LGPL.  See http:\/\/gnu.org\/licenses\/lgpl.html for details.\n\nDate selection:\n- Use the \u00ab and \u00bb buttons to select year\n- Use the < and > buttons to select month\n- Hold mouse button on any of the buttons above for faster selection.",
                "ABOUT_TIME": "\n\nTime selection:\n Click on any of the time parts to increase it\n or Shiftclick to decrease it\n or click and drag for faster selection.",
                "PREV_YEAR": "Select to move to the previous year. Select and hold for a list of years.",
                "PREV_MONTH": "Select to move to the previous month. Select and hold for a list of the months.",
                "GO_TODAY": "Go to today",
                "NEXT_MONTH": "Select to move to the next month. Select and hold for a list of the months.",
                "SEL_DATE": "Select a date.",
                "DRAG_TO_MOVE": "Drag to move.",
                "PART_TODAY": " Today ",
                "DAY_FIRST": "Display %s first",
                "WEEKEND": "0,6",
                "CLOSE": "Close",
                "TODAY": "Today",
                "TIME_PART": "(Shift-)Select or Drag to change the value.",
                "DEF_DATE_FORMAT": "%Y%m%d",
                "TT_DATE_FORMAT": "%a, %b %e",
                "WK": "wk",
                "TIME": "Time:"
            };

            window.weeblrApp = window.weeblrApp || {};
            window.weeblrApp.analyticsReportConfig = <?php echo json_encode($this->getDisplayData());?>;
        </script>

	<?php endif; ?>

</head>

<body class="sh404sef-fe wbl-theme-default">

<section class="sh404sef-fe-ga-header-container">
    <div class="sh404sef-fe-ga-header">
        <h1><?php echo $this->platform->tprintf('COM_SH404SEF_ANALYTICS_FRONTEND_TITLE', $this->getEscaped('sitename')); ?></h1>
        <div class="" id="toolbar-sh404sef-spinner"></div>
    </div>
</section>

<main class="sh404sef-fe-ga-main-container">
	<?php
	echo LayoutHelper::render(
		'com_sh404sef.analytics.main',
		$this->getDisplayData(),
		SH404SEF_LAYOUTS_PATH
	);

	?>
</main>

<section class="sh404sef-fe-ga-footer-container">
    <div class="sh404sef-fe-ga-footer"><?php echo $this->platform->t('COM_SH404SEF_ANALYTICS_FRONTEND_FOOTER_TITLE'); ?></div>
</section>
<?php if (!$this->hasDisplayData('errors')) :
	$analyticsScript = $assetsManager->getHashedMediaLink(
		'analytics.js',
		array(
			'pathFromRoot' => 'js6',
		)
	);
	?>

    <script async src="<?php echo $analyticsScript; ?>"
            type="text/javascript"></script>
<?php endif; ?>
</body>
</html>
