<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier - Weeblr llc - 2018
 * @package     sh404SEF
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     4.13.1.3756
 * @date		2017-12-22
 */

defined('_JEXEC') or die;

/**
 * This layout displays a button to allow one-click update
 */

$button = ShlHtmlBs_Helper::button(JText::_('COM_SH404SEF_PERFORM_UPDATE'));
?>
<form method="post" action="index.php?option=com_installer&task=update.find">
<?php
  echo $button; 
  echo JHTML::_( 'form.token' ); ?>
</form>
