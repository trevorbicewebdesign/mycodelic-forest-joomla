<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier - Weeblr llc - 2018
 * @package     sh404SEF
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     4.15.1.3863
 * @date        2018-08-22
 */

/**
 * Input:
 *
 * $displayData['sitename']
 * $displayData['url']
 */
// Security check to ensure this file is being included by a parent file.
defined('_JEXEC') or die();

?>
<!-- Google sitename markup-->
<script type="application/ld+json">
<?php echo ShlSystem_Convert::jsonEncode($displayData); ?>

</script>
<!-- End of Google sitename markup-->
