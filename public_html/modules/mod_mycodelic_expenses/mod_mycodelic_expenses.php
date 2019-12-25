<?php
defined('_JEXEC') or die('Restricted access');

$db = JFactory::getDbo();

// Create a new query object.
$query = $db->getQuery(true);

// Select all records from the user profile table where key begins with "custom.".
// Order it by the ordering field.
$query->select($db->quoteName(array('FieldValue')));
$query->join('LEFT', $db->quoteName('#__rsform_submission_values', 'b') . ' ON (' . $db->quoteName('a.SubmissionId') . ' = ' . $db->quoteName('b.SubmissionId') . ')');
$query->from($db->quoteName('#__rsform_submissions', 'a'));
$query->where($db->quoteName('a.FormId') . ' = '. $db->quote('11'));
$query->where($db->quoteName('b.FieldName') . ' = '. $db->quote('item_total'));

// Reset the query using our newly populated query object.
$db->setQuery($query);

// Load the results as a list of stdClass objects (see later for more options on retrieving data).
$results = $db->loadObjectList();
print_r($results);

$total = 0;
foreach($results as $index=>$val){
    $total += floatval($val->FieldValue);
}

echo $total."<br/>";
?>
