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

use Weeblr\Wblib\V_SH4_4206\Factory;

// Security check to ensure this file is being included by a parent file.
defined('_JEXEC') || die;

$assetsManager = Factory::get()->getThe('sh404sef.assetsManager');

$fileNames = array(
	'sh404sefsocial.js',
);
$js        = '';
foreach ($fileNames as $fileName)
{
	$fullPath = $assetsManager->getMediaFullPath(
		$fileName,
		array(
			'pathFromRoot' => 'js',
			'hashed'       => true,
		)
	);
	if (file_exists($fullPath) && is_file($fullPath))
	{
		$js .= file_get_contents($fullPath);
	}
}

$js = trim($js);
if (empty($js))
{
	return;
}

$js = str_replace(
	'"{{use_share_api}}"',
	$this->get('use_share_api', 'true'),
	$js
);
$js = str_replace(
	'"{{use_enhanced_ux}}"',
	$this->get('use_enhanced_ux', 'true'),
	$js
);

$dialogTitle = $this->get('dialog_title', JText::_('PLG_SH404SEFCORE_SH404SEFSOCIAL_STATIC_BUTTON_TEXT_SHARE_MOBILE_API'));
$js          = str_replace(
	"{{dialog_title}}",
	$dialogTitle,
	$js
);

?>

<!-- sh404SEF sharing buttons javascript -->
<script>
	<?php echo $js; ?>
</script>
<!-- End of sh404SEF sharing buttons javascript -->
