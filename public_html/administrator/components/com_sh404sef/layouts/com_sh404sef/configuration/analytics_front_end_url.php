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

defined('JPATH_BASE') or die;

?>

<input type="text" id="analytics_frontend_access_url" class="sh404sef-textinput"
       value="<?php echo $this->getAsAbsoluteUrl('url'); ?>"/>
<button type="button" class="btn wb-mr-left-05" id="copy_analytics_frontend_access_url"
        title="<?php echo JText::_('JGLOBAL_COPY'); ?>">
    <svg viewBox="0 0 16 16">
        <path d="M14 5a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h8zm-1 2H7v6h6V7zm-3-6a1 1 0 0 1 1 1v2H9V3H3v6h1v2H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8z"></path>
    </svg>
</button>
<script>
    document.getElementById("copy_analytics_frontend_access_url").addEventListener("click", (event) => {
            event.preventDefault()
            let source = document.getElementById("analytics_frontend_access_url")
            source.select()
            let success = document.execCommand("copy")
            success ? console.log("Link copied to clipboard") : console.error("Unable to copy link to clipboard")
        }
    )
</script>
