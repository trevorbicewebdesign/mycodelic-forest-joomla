<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author       Yannick Gaultier
 * @copyright    (c) Yannick Gaultier - Weeblr llc - 2020
 * @package      sh404SEF
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version      4.21.0.4206
 * @date        2020-06-26
 */

/**
 * Input:
 *
 * $displayData['url']
 * $displayData['fbColorscheme']
 */
// Security check to ensure this file is being included by a parent file.
if (!defined('_JEXEC')) die('Direct Access to this location is not allowed.');

?>
<!-- Facebook send button -->
<fb:send href="<?php echo $displayData['url']; ?>" colorscheme="<?php echo $displayData['fbColorscheme']; ?>">
</fb:send>
<!-- End of Facebook send button -->
