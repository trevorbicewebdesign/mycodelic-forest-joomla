<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
// Include dependancies
jimport('joomla.application.component.controller');
// Execute the task.
$app = JFactory::getApplication();
$controller	= JControllerLegacy::getInstance('TestMode');
$controller->execute( $app->input->getCmd('task', '') );
$controller->redirect();
switch ($app->input->getCmd('task', '') ) {
	default:
		displayConfig();
		break;
}
function displayConfig() {
	$host = $_SERVER['HTTP_HOST'];
	$path = $_SERVER['REQUEST_URI'];
	preg_match("#(.*?)/administrator/index.php#", $path, $holder);
	$path = $holder[1];
	// echo $host.$path;
	JToolBarHelper::title(  JText::_( 'Test Mode' ) );
	?>
<!--
    <iframe src ="http://<?php echo $host.$path; ?>/administrator/index.php?option=com_config&view=component&component=com_testmode&tmpl=component" width="100%" height="300" frameborder="0" scrolling="no">
      <p>Your browser does not support iframes.</p>
    </iframe>
-->
	<?php
}
?>