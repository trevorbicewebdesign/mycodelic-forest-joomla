<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier - Weeblr llc - 2019
 * @package     sh404SEF
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     4.17.0.3932
 * @date        2019-09-30
 */

/**
 * Input:
 *
 * 'logo'
 * 'url'
 */
// Security check to ensure this file is being included by a parent file.
defined('_JEXEC') or die();
?>
<!-- Google logo & contacts markup-->
<script type="application/ld+json">
<?php echo ShlSystem_Convert::jsonEncode($displayData); ?>

</script>
<!-- End of Google logo & contacts markup-->
