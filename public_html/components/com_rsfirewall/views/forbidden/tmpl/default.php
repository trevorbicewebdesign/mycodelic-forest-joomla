<?php
/**
 * @package    RSFirewall!
 * @copyright  (c) 2009 - 2020 RSJoomla!
 * @link       https://www.rsjoomla.com
 * @license    GNU General Public License http://www.gnu.org/licenses/gpl-3.0.en.html
 */

defined('_JEXEC') or die('Restricted access');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title><?php echo JText::_('COM_RSFIREWALL_403_FORBIDDEN'); ?></title>
	<style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
      }
    </style>
</head>
<body>
	<div class="container">
		<div class="alert alert-danger text-center" role="alert">
			<h4><?php echo JText::_('COM_RSFIREWALL_403_FORBIDDEN'); ?></h4>
			<?php echo $this->reason; ?>
		</div>
	</div>
</body>
</html>