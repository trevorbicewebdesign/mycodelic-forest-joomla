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

$theme     = $this->get('theme', 'colors');
$fileNames = array(
	'sh404sefsocial.min.css',
	'sh404sefsocial.' . $theme . '.min.css'
);
$css       = '';
foreach ($fileNames as $fileName)
{
	$fullPath = $assetsManager->getMediaFullPath(
		$fileName,
		array(
			'pathFromRoot' => 'css',
			'hashed'       => true,
		)
	);
	if (file_exists($fullPath) && is_file($fullPath))
	{
		$css .= file_get_contents($fullPath);
	}
}

$css = trim($css);
if (empty($css))
{
	return;
}

$size = $this->get('base_font_size', '0.9rem');
$css  = str_replace(
	"'{wbl_base_font_size}'",
	$size,
	$css
);

?>

<!-- sh404SEF sharing buttons css -->
<style type="text/css">
    <?php echo $css; ?>
</style>
<!-- End of sh404SEF sharing buttons css -->
