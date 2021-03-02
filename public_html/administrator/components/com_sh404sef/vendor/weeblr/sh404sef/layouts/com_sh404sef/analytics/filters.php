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

// Security check to ensure this file is being included by a parent file.
defined('WBLIB_EXEC') || die;

$showFilters = $this->getInArray('options', 'showFilters', 'yes');
if ('yes' != $showFilters)
{
	return;
}

// array to hold various filters
$position = $this->get('position', 'top');
$filters  = Sh404sefHelperAnalytics::prepareReportsFilters(
	$this->get('options', array()),
	$this->get('viewsList', array()),
	$position
);

?>
<div class="sh404sef-analytics-filters sh404sef-analytics-filters-<?php echo $position; ?>">
	<?php
	foreach ($filters as $filter) :
		echo $filter;
	endforeach;
	?>
</div>
