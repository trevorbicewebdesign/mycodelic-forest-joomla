<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier - Weeblr llc - 2018
 * @package     sh404SEF
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     4.15.1.3863
 * @date		2018-08-22
 */

defined('JPATH_BASE') or die;

?>

<div class="container-fluid">
<?php

foreach ($this->form->getFieldset($this->currentFieldset->name) as $field)
{
	$renderer = empty($field->element['shlrenderer']) ? 'default' : (string) $field->element['shlrenderer'];
	echo $this->layoutRenderer[$renderer]->render($field);
}

?>
</div>
