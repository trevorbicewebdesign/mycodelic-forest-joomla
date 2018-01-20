<?php
/**
 * @package         JFBConnect
 * @copyright (c)   2009-2015 by SourceCoast - All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @build-date      2016/12/24
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

jimport('sourcecoast.articleContent');
jimport('sourcecoast.openGraphPlugin');

class plgOpenGraphK2 extends OpenGraphPlugin
{
    protected function init()
    {
        $this->extensionName = "K2";
        $this->supportedComponents[] = 'com_k2';
        $this->supportedAutopostLabel = "Item";
        $this->supportedAutopostTypes[] = 'item';
        $this->setsDefaultTags = true;

        // Define all types of pages this component can create and would be 'objects'
        $this->addSupportedObject("Item", "item");
        $this->addSupportedObject("Category", "category");

        // Add actions that aren't passive (commenting, voting, etc).
        // Things that trigger just by loading the page should not be defined here unless extra logic is required
        // ie. Don't define reading an article
        $this->addSupportedAction("Comment", "comment");
        $this->addSupportedAction("Vote", "vote");
    }

    protected function findObjectType($queryVars)
    {
        // Setup Object type for page
        $view = array_key_exists('view', $queryVars) ? $queryVars['view'] : '';
        if ($view == 'itemlist' || $view == 'latest')
            $view = 'category';

        $objectTypes = $this->getObjects($view);
        $object = null;
        $isEditing = isset($queryVars['task']) && ($queryVars['task'] == 'edit' || $queryVars['task'] == 'add');
        if ($view == 'item' && !$isEditing)
        {
            if (!isset($queryVars['id']) || !$queryVars['id']) return null;
            $item = $this->getItemFromItemId($queryVars['id']);
            $object = $this->getBestCategory($objectTypes, $view, $item->catid);
        }
        else if ($view == 'category')
        {
            $catId = $this->getCurrentK2CategoryId();
            $object = $this->getBestCategory($objectTypes, $view, $catId);
        }
        return $object;
    }

    private function getBestCategory($objectTypes, $view, $catId)
    {
        $object = null;

        if ($objectTypes)
        {
            $catParents = array();
            $catParents[] = $catId;
            $parentId = $catId;
            do
            {
                $this->db->setQuery("SELECT parent FROM #__k2_categories WHERE id = " . $parentId);
                $parentId = $this->db->loadResult();
                $catParents[] = $parentId;
            } while ($parentId != 0 && $parentId != null);

            $bestDistance = 99999;
            foreach ($objectTypes as $type)
            {
                if($bestDistance == 99999 && $type->params->get('category') == 0)
                {
                    $object = $type;
                }
                else
                {
                    foreach ($catParents as $key => $id)
                    {
                        if ($id == $type->params->get('category'))
                        {
                            if ($key < $bestDistance)
                            {
                                $object = $type;
                                $bestDistance = $key;
                            }
                            if ($bestDistance == 0)
                                break;
                        }
                    }
                    if ($bestDistance == 0)
                        break;
                }
            }
        }

        return $object;
    }

    protected function setOpenGraphTags()
    {
        $desc = ''; //Note: meta is same as blank value, since system plugin attempts to generate from metadescription if no value is found
        $image = '';

        $view = JRequest::getCmd('view');

        if($this->object)
        {
            $desc_type = $this->object->params->get('custom_desc_type');
            $desc_length = $this->object->params->get('custom_desc_length');
            $image_type = $this->object->params->get('custom_image_type');
            $image_path = $this->object->params->get('custom_image_path');
            $title_type = $this->object->params->get('custom_title_type');
        }
        else
        {
            $desc_type = 'custom_desc_introwords';
            $desc_length = '50';
            $image_type = 'custom_image_item';
            $image_path = '';
            $title_type = 'custom_title_article';
        }

        if ($view == 'item')
        {
            $itemModel = JModelLegacy::getInstance('Item', 'K2Model');
            $item = $itemModel->getData();

            if($title_type == 'custom_title_page')
            {
                $document = JFactory::getDocument();
                $title = $document->getTitle();
            }
            else //if($title_type == 'custom_title_article')
            {
                $title = $item->title;
            }
            $this->addOpenGraphTag('title', $title, false);

            if ($desc_type == 'custom_desc_introwords')
                $desc = $this->getFirstArticleText($item, $desc_length, SC_INTRO_WORDS);
            else if ($desc_type == 'custom_desc_introchars')
                $desc = $this->getFirstArticleText($item, $desc_length, SC_INTRO_CHARS);
            $this->addOpenGraphTag('description', $desc, false);

            //if ($image_type == 'custom_image_item')
            //{
            $image = $this->getK2MainImage($item);
            //}
            if ($image_type == 'custom_image_first' || $image == '')
            {
                $tmpImage = $this->getFirstImage($item);
                if($tmpImage != '')
                    $image = $tmpImage;
            }
            if ($image_type == 'custom_image_category' || $image == '')
            {
                $tmpImage = $this->getK2CategoryImage($item->catid);
                if($tmpImage != '')
                    $image = $tmpImage;
            }
            if (($image_type == 'custom_image_custom' || $image == '') && $image_path != '')
            {
                $image = $image_path;
            }
            $this->addOpenGraphTag('image', $image, false);

            /*// Item Author
            if(isset($item->created_by))
            {
                $this->db->setQuery("SELECT name FROM #__users WHERE id=".$item->created_by);
                $author = $this->db->loadResult();
                $this->addOpenGraphTag('author', $author, false);
            }*/
        }
        else if ($view == 'itemlist' || $view == 'latest')
        {
            $catid = $this->getCurrentK2CategoryId();
            $category = $this->getK2Category($catid);

            //Note: K2 Category menus don't need a category set to show all categories. In this case, the catid = 0, so fall through to use page title
            if($title_type == 'custom_title_page' || !$catid)
            {
                $document = JFactory::getDocument();
                $title = $document->getTitle();
            }
            else //if($title_type == 'custom_title_category')
            {
                $title = $category->name;
            }
            $this->addOpenGraphTag('title', $title, false);

            if ($desc_type == 'custom_desc_catwords')
                $desc = $this->getFirstCategoryText($category, $desc_length, SC_INTRO_WORDS);
            else if ($desc_type == 'custom_desc_catchars')
                $desc = $this->getFirstCategoryText($category, $desc_length, SC_INTRO_CHARS);
            $this->addOpenGraphTag('description', $desc, false);

            //if ($image_type == 'custom_image_category')
            //{
            $image = $this->getK2CategoryImage($catid);
            //}
            if (($image_type == 'custom_image_custom' || $image == '') && $image_path != '')
            {
                $image = $image_path;
            }
            $this->addOpenGraphTag('image', $image, false);
        }
    }

    private function getItemFromItemId($itemId)
    {
        $db = JFactory::getDBO();
        $id = intval($itemId);
        $query = "SELECT * FROM #__k2_items WHERE id={$id}";
        $db->setQuery($query, 0, 1);
        $item = $db->loadObject();
        return $item;
    }

    /************* DEFINED ACTIONS CALLS *******************/
    protected function checkActionAfterRoute($action)
    {
        if ((JRequest::getCmd('task') == 'vote' && $action->system_name == 'vote') || (JRequest::getCmd('task') == 'comment' && $action->system_name == 'comment'))
        {
            JTable::addIncludePath(JPATH_ADMINISTRATOR.'/components/com_k2/tables');

            //Get item
            $item = JTable::getInstance('K2Item', 'Table');
            $item->load(JRequest::getInt('itemID'));

            //Get Item URL
            $url = $this->getItemURL($item);
            $queryVars = $this->jfbcOgActionModel->getUrlVars($url);

            //Access check
            $user = JFactory::getUser();
            $canAccess = $this->canAccessItem($user, $item);

            if($canAccess && $queryVars['id'])
            {
                if(($action->system_name == 'vote' && $this->canVote()) ||
                    ($action->system_name == 'comment' && $this->canComment($user, $item)))
                {
                    $this->triggerAction($action, $url);
                }
            }
        }
    }

    private function canAccessItem($user, $item)
    {
        //Get category
        $category = JTable::getInstance('K2Category', 'Table');
        $category->load($item->catid);

        if(!in_array($item->access, $user->getAuthorisedViewLevels()) || !in_array($category->access, $user->getAuthorisedViewLevels()))
            return false;

        if (!$item->published || $item->trash)
            return false;

        if (!$category->published || $category->trash)
            return false;

        return true;
    }

    private function canVote()
    {
        $rate = JRequest::getVar('user_rating', 0, '', 'int');
        return ($rate >= 1 && $rate <= 5);
    }

    private function canComment($user, $item)
    {
        $params = JComponentHelper::getParams("com_k2");
        require_once(JPATH_SITE . '/components/com_k2/helpers/permissions.php');

        if ((($params->get('comments') == '2') && ($user->id > 0) && K2HelperPermissions::canAddComment($item->catid)) || ($params->get('comments') == '1'))
        {
            $row = JTable::getInstance('K2Comment', 'Table');

            if (!$row->bind(JRequest::get('post')))
            {
                return false;
            }

            $row->commentText = JRequest::getString('commentText', '', 'default');
            $row->commentText = strip_tags($row->commentText);
            $row->commentEmail = $user->email;
            $row->userName = $user->name;

            $userName = trim($row->userName);
            $commentEmail = trim($row->commentEmail);
            $commentText = trim($row->commentText);

            if (empty($userName) || $userName == JText::_('K2_ENTER_YOUR_NAME') || empty($commentText) || $commentText == JText::_('K2_ENTER_YOUR_MESSAGE_HERE') || empty($commentEmail) || $commentEmail == JText::_('K2_ENTER_YOUR_EMAIL_ADDRESS'))
            {
                return false;
            }

            jimport('joomla.mail.helper');
            if (!JMailHelper::isEmailAddress($commentEmail))
            {
                return false;
            }
        }
        return true;
    }

    private function getItemURL($item)
    {
        require_once(JPATH_SITE . '/components/com_k2/helpers/route.php');
        $url = K2HelperRoute::getItemRoute($item->id . ":" . urlencode($item->alias), $item->catid);
        $url = JRoute::_($url, true);
        $jUri = JURI::getInstance();
        $url = rtrim($jUri->toString(array('scheme', 'host', 'port')), '/') . $url;
        return $url;
    }

    /* Images and Description */
    protected function getK2MainImage($article)
    {
        $imageName = 'media/k2/items/cache/' . md5('Image' . $article->id) . '_XL.jpg';

        jimport('joomla.filesystem.file');
        if (JFile::exists(JPATH_SITE . '/' . $imageName))
            return JURI::base() . $imageName;
        else
            return '';
    }

    protected function getK2CategoryImage($catid)
    {
        $category = $this->getK2Category($catid);
        $image = $category->image;
        $imageName = 'media/k2/categories/' . $image;

        jimport('joomla.filesystem.file');
        if (JFile::exists(JPATH_SITE . '/' . $imageName))
            return JURI::base() . $imageName;
        else
            return '';
    }

    protected function getCurrentK2CategoryId()
    {
        $catid = JRequest::getInt('id');
        return $catid;
    }

    protected function getK2Category($catid)
    {
        JTable::addIncludePath(JPATH_ADMINISTRATOR . '/components/com_k2/tables');
        $category = JTable::getInstance('K2Category', 'Table');
        $category->load($catid);
        return $category;
    }

    protected function getBestImage($item)
    {
        $image = $this->getK2MainImage($item);
        if ($image == '')
        {
            $image = $this->getFirstImage($item);
        }
        if ($image == '')
        {
            $image = $this->getK2CategoryImage($item->catid);
        }
        return $image;
    }

    protected function getBestText($item)
    {
        return $this->getFirstArticleText($item, 20, SC_INTRO_WORDS);
    }

    /************* AUTO-POST *******************/

    static $autopostArticle = null;
    public function onAfterK2Save(&$item, $isNew)
    {
        $this->tryAutoPublish($item, $item->published);
    }

    public function onFinderAfterDelete($context, $item)
    {
        if($context == 'com_k2.item')
        {
            // Get object that $articleId belongs to
            $objectTypes = $this->getObjects('item');
            $ogObjects = $this->getObjectsForArticle($objectTypes, $item->catid);
            $this->removePublish($ogObjects, $item->id);
        }
    }

    public function onFinderChangeState($context, $pks, $value)
    {
        if($context == 'com_k2.item')
        {
            foreach($pks as $pk)
            {
                $item = $this->getItemFromItemId($pk);
                $this->tryAutoPublish($item, $value);
            }
        }
    }

    public function getAutopostMessage($objectType, $id)
    {
        $message = $this->getBestText(self::$autopostArticle);
        return $message;
    }

    private function tryAutoPublish($item, $value)
    {
        self::$autopostArticle = $item;

        if(!$this->isArticleSpecial($item->access))
        {
            $isPending = $this->isArticlePublishPending($item->publish_up);

            // Get object that $articleId belongs to
            $objectTypes = $this->getObjects('item');
            $ogObjects = $this->getObjectsForArticle($objectTypes, $item->catid);

            if($value == 1) //TODO: should be "1"?
            {
                $link = 'index.php?option=com_k2&view=item&id='.$item->id;
                $this->autopublish($ogObjects, $item->id, $link, $isPending);
            }
            else if($isPending)
            {
                $this->removePublish($ogObjects, $item->id);
            }
        }

        self::$autopostArticle = null;
    }

    public function openGraphUpdatePending($articleId, $link, $ext)
    {
        if($ext == $this->supportedComponents[0])
        {
            $item = $this->getItemFromItemId($articleId);
            self::$autopostArticle = $item;

            $isPending = $this->isArticlePublishPending($item->publish_up);
            if(!$isPending)
            {
                // Get object that $articleId belongs to
                $objectTypes = $this->getObjects('item');
                $ogObjects = $this->getObjectsForArticle($objectTypes, $item->catid);

                $this->updatePending($ogObjects, $articleId, $link);
            }

            self::$autopostArticle = null;
        }
    }

    private function getObjectsForArticle($objectTypes, $catId)
    {
        $validObjects = array();

        $object = null;

        if ($objectTypes && $catId > 0)
        {
            $catParents = array();
            $catParents[] = $catId;
            $parentId = $catId;
            do
            {
                $this->db->setQuery("SELECT parent FROM #__k2_categories WHERE id = " . $parentId);
                $parentId = $this->db->loadResult();
                $catParents[] = $parentId;
            } while ($parentId != 0 && $parentId != null);

            foreach ($objectTypes as $type)
            {
                if($type->params->get('category') == 0 || $type->params->get('category') == $catId)
                {
                    $validObjects[] = $type;
                }
                else
                {
                    foreach ($catParents as $key => $id)
                    {
                        if ($id == $type->params->get('category'))
                        {
                            $validObjects[] = $type;
                        }
                    }
                }
            }
        }

        return $validObjects;
    }

}