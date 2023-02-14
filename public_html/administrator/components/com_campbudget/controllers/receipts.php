<?php
// No direct access
defined('_JEXEC') or die;
jimport('joomla.application.component.controllerform');

class campbudgetControllerReceipts extends JControllerForm
{

    protected $text_prefix = 'COM_CAMPBUDGET';

    /**
     * Method override to check if you can add a new record.
     *
     * @param   array  $data  An array of input data.
     *
     * @return  boolean
     *
     * @since   1.6
     */

    public function import()
    {
        $db = JFactory::getDBO();
        $query = "
SELECT
a.SubmissionId AS id,
a.DateSubmitted,
a.UserId AS user_id,
MAX(CASE WHEN b.FieldName = 'first_name' THEN b.FieldValue ELSE NULL END) AS fname,
MAX(CASE WHEN b.FieldName = 'last_name' THEN b.FieldValue ELSE NULL END) AS lname,
MAX(CASE WHEN b.FieldName = 'receipt_photo_pdf' THEN b.FieldValue ELSE NULL END) AS pdf_path,";
    $i=1;
    while($i<20){
        $query .= "    
MAX(CASE WHEN b.FieldName = 'item_amount_{$i}' THEN b.FieldValue ELSE NULL END) AS item_amount_{$i},
MAX(CASE WHEN b.FieldName = 'item_name_{$i}' THEN b.FieldValue ELSE NULL END) AS item_name_{$i},
MAX(CASE WHEN b.FieldName = 'type_{$i}' THEN b.FieldValue ELSE NULL END) AS type_{$i},
";
    $i++;
    }
    $query .= "
MAX(CASE WHEN b.FieldName = 'reimbursed' THEN b.FieldValue ELSE NULL END) AS reimbursed,
MAX(CASE WHEN b.FieldName = 'donation' THEN b.FieldValue ELSE NULL END) AS donation,
MAX(CASE WHEN b.FieldName = 'date' THEN b.FieldValue ELSE NULL END) AS date,
MAX(CASE WHEN b.FieldName = 'note' THEN b.FieldValue ELSE NULL END) AS note,
MAX(CASE WHEN b.FieldName = 'receipt_photo_pdf' THEN b.FieldValue ELSE NULL END) AS receipt_photo_pdf,
MAX(CASE WHEN b.FieldName = 'item_total' THEN b.FieldValue ELSE NULL END) AS total,
MAX(CASE WHEN b.FieldName = 'tax' THEN b.FieldValue ELSE NULL END) AS tax
";
    
    $query .= "
FROM `jos_rsform_submissions` a
INNER JOIN `jos_rsform_submission_values` b ON a.SubmissionId = b.SubmissionId
WHERE a.FormId = 11
GROUP BY a.SubmissionId 
ORDER BY date ASC
    ";
        $db->setQuery($query);

        // Load the results as a list of stdClass objects (see later for more options on retrieving data).
        $items = $db->loadObjectlist();
        $new_items = [];
        foreach($items as $index=>$item){
            
            $item_object = [];
            foreach($item as $field=>$value){
                if(preg_match("#(.*?)_([0-9][0-9]?)#", $field, $tmp)) {
                    
                    if( !isset($item_object[$tmp[2]]) ) {
                        $item_object[$tmp[2]] = new stdClass;
                        $item_object[$tmp[2]]->{$tmp[1]} = $value;
                    }
                    else {
                        $item_object[$tmp[2]]->{$tmp[1]} = $value;
                    }
                    
                    if(empty($value)){
                        unset($item_object[$tmp[2]]);
                    }
                    
                    unset($item->$field);
                    $item->rows = $item_object;

                    $new_items[$index] = new stdClass;
                    $new_items[$index] = $item;
                }
            }
        }

        foreach($new_items as $index=>$item){
            $item->donation = substr($item->donation, 0, 1);
            $item->reimbursed = substr($item->reimbursed, 0, 1);
            $item->date = date("Y-m-d H:i:s", strtotime($item->date));
            $item->season = date("Y", strtotime($item->date));
            $query = "SELECT * FROM `trevorbi_mycodelic`.`jos_campbudget_receipts` WHERE `total` = '$item->total' AND `pdf_path` = '$item->pdf_path' ";

            $db->setQuery($query);
            $existingreceipts = $db->loadObjectlist();
            if( !(count($existingreceipts) > 0) ){
                $query = "INSERT INTO `trevorbi_mycodelic`.`jos_campbudget_receipts` (`user_id`,`season`,`donation`,`reimbursed`,`tax`, `total`, `pdf_path`, `date`) VALUES ('$item->user_id', '$item->season', '$item->donation','$item->reimbursed','$item->tax', '$item->total', '$item->receipt_photo_pdf', '$item->date')";
                $db->setQuery($query);
                $db->execute();
                $receiptId = $item->id;
            }

            foreach($item->rows as $key=>$row){
                $row->item_name = $db->escape($row->item_name);

                $query = "SELECT * FROM `trevorbi_mycodelic`.`jos_campbudget_receipt_items` WHERE `name` = '$item->name' AND `subtotal` = '$item->subtotal' ";
                $db->setQuery($query);
                $existingitems = $db->loadObjectlist();
                
                if( !(count($existingitems) > 0) ){
                    $query = "SELECT * FROM jos_categories WHERE `extension`='com_campbudget' AND `title`='$row->type' LIMIT 1";
                    $db->setQuery($query);
                    $category = $db->loadObject();
 
                    $query = $query = "INSERT INTO `trevorbi_mycodelic`.`jos_campbudget_receipt_items` (`receipt_id`, `catid`, `name`,`quantity`,`tax`,`amount`,`subtotal`,`type`) VALUES ('$item->id', '$category->id', '$row->item_name',1,0,'$row->item_amount','$row->item_amount','$row->type')";
                    $db->setQuery($query);
                    $db->execute();
                }
            }
        }
		$this->setRedirect('index.php?option=com_campbudget&view=receipts');
    }
}
