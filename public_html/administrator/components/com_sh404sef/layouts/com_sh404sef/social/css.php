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

// Security check to ensure this file is being included by a parent file.
defined('_JEXEC') || die;

?>

<!-- sh404SEF social buttons css -->
<style type="text/css">
    /* Top padding for buttons set */
    div.sh404sef-social-buttons {
        padding-top: 0.5em;
        line-height: 1;
    }

    .sh404sef-social-buttons span {
        display: inline-block;
        vertical-align: top;
        margin-bottom: 0.3em;
    }

    /* Facebook flyout cut-off fix */
    .fb-like span {
        overflow: visible !important;
    }

    .fb-send span {
        overflow: visible !important;
    }

    .fb-like iframe {
        max-width: none !important;
    }

    .fb-send iframe {
        max-width: none !important;
    }

    /* Joomla default templates css fix */
    /* parent elements needs to have overflow visible */
    .items-row.cols-2, .items-leading {
        overflow: visible !important;
    }

    #contentarea {
        overflow: visible !important;
    }

</style>
<!-- End of sh404SEF social buttons css -->
