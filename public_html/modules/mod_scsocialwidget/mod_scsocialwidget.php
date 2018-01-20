<?php
/**
 * @package         JFBConnect
 * @copyright (c)   2009-2015 by SourceCoast - All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @version         Release v7.1.2
 * @build-date      2016/12/24
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.filesystem.file');
if (!JFile::exists(JPATH_ROOT . '/components/com_jfbconnect/libraries/factory.php'))
{
    echo "JFBConnect not found. Please reinstall.";
    return;
}

if (!class_exists('JFBCFactory'))
{
    echo "JFBConnect not enabled. Please enable.";
    return;
}

$userIntro = $params->get('user_intro');
$providerType = $params->get('provider_type');
$widgetType = $params->get('widget_type');
$widget = JFBCFactory::widget($providerType, $widgetType, $params->get('widget_settings'));

require(JModuleHelper::getLayoutPath('mod_scsocialwidget'));

?>
