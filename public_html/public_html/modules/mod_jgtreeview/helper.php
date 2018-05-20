<?php
// $HeadURL: https://joomgallery.org/svn/joomgallery/JG-3/Modules/JoomTreeview/trunk/helper.php $
// $Id: helper.php 4297 2013-06-06 21:21:10Z erftralle $
/**
* Module JoomGallery Treeview
* by JoomGallery::Project Team
* @package JoomGallery
* @copyright JoomGallery::Project Team
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* This program is free software; you can redistribute it and/or modify it under
* the terms of the GNU General Public License as published by the Free Software
* Foundation, either version 2 of the License, or (at your option) any later
* version.
*
* This program is distributed in the hope that it will be useful, but WITHOUT
* ANY WARRANTY, without even the implied warranty of MERCHANTABILITY or FITNESS
* FOR A PARTICULAR PURPOSE.
* See the GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License along with
* this program; if not, write to the Free Software Foundation, Inc.,
* 51 Franklin St, Fifth Floor, Boston, MA 02110, USA
*/

// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Helper class for module JoomGallery Treeview
 */
class modJgTreeViewHelper extends JoomInterface
{
  /**
   * Entry function
   *
   * @param   object  $params     backend parameters
   * @param   string  $dberror    database error
   * @param   int     $module_id  the id of the module
   */
  public function fillObject($params, &$dberror, $module_id)
  {
    // Read the backend parameters
    $this->getParams($params, $module_id);

    // Get JoomGallery styles
    $this->getPageHeader();

    // Create and include the dynamic css according to backend settings
    $this->renderCSS();

    // Get the category structures
    $this->categories     = $this->_ambit->getCategoryStructure();
    $this->allcategories  = $this->_ambit->getCategoryStructure(true);

    // Get the categories
    return $this->getJgCats($dberror);
  }

  /**
   * Get the backend parameters and set the module configuration
   *
   * @param object $params      backend parameters
   * @param int    $module_id   module id
   */
  protected function getParams($params, $module_id)
  {
    // Override some default interface settings
    $this->addConfig('showlastcomment', 0);
    $this->addConfig('shownumcomments', 0);
    $this->addConfig('hidebackend', false);
    $this->addConfig('categoryfilter', '');

    // Get the backend parameters and add them to the config
    $itemid = intval($params->get('cfg_itemid', 0));
    if($itemid > 0)
    {
      $this->addConfig('Itemid', $itemid);
    }

    $this->addConfig('name', addslashes(trim($params->get('cfg_name', JText::_('COM_JOOMGALLERY_COMMON_GALLERY')))));
    $this->addConfig('grid', $params->get('cfg_grid', 1) == 1 ? 'true' : 'false');
    $this->addConfig('bgcolor_active_node', $params->get('cfg_bgcolor_active_node', '#C0D2EC'));
    $this->addConfig('show_open_close_all', intval($params->get('cfg_show_open_close_all', 1)));
    $this->addConfig('show_credits', intval( $params->get('cfg_show_credits', 1)));
    $this->addConfig('sort_cat', $params->get('cfg_sort_cat', 'name ASC'));
    $this->addConfig('sort_subcat', $params->get('cfg_sort_subcat', 'name ASC'));
    $this->addConfig('max_len_catname', intval( $params->get('cfg_max_len_catname', 0)));
    $this->addConfig('blacklist_cats', $this->cleanCSV($params->get('cfg_blacklist_cats', '')));

    // User mode
    $this->addConfig('usrmode', intval($params->get('cfg_usrmode', 1)));
    // Link
    $this->addConfig('nodelink', intval($params->get('cfg_nodelink', 0)));

    // Root category
    $root_catid = intval($params->get('cfg_root_catid', 1));
    if($root_catid < 1 )
    {
      $root_catid = 1;
    }
    $this->addConfig('root_catid', $root_catid);

    // Icon theme
    $icon_theme_path = JURI::root().'media/mod_jgtreeview/img/';
    $icon_theme      = $params->get('cfg_icon_theme', '');
    if(!empty($icon_theme))
    {
      $icon_theme_path .= $icon_theme;
      $icon_theme_path .= '/';
    }
    $this->addConfig('icon_theme_path', $icon_theme_path);

    // Module id
    $this->addConfig('modid', $module_id);

    // Get JoomGallery's configuration parameters for displaying restricted categories
    $cfg_showrestrictedhint = $this->getJConfig('jg_showrestrictedhint') === false ? 0 : intval($this->getJConfig('jg_showrestrictedhint'));
    $cfg_showrestrictedcats = $this->getJConfig('jg_showrestrictedcats') === false ? 0 : intval($this->getJConfig('jg_showrestrictedcats'));
    $filter_cats            = false;
    $showrestrictedhint     = false;
    $showrestrictedcats     = false;
    if(!$cfg_showrestrictedhint && !$cfg_showrestrictedcats)
    {
      $filter_cats = true;
    }
    else
    {
      if($cfg_showrestrictedhint)
      {
        $showrestrictedhint = true;
      }
      if($cfg_showrestrictedcats)
      {
        $showrestrictedcats = true;
      }
    }
    $this->addConfig('filter_cats', $filter_cats);
    $this->addConfig('showrestrictedhint', $showrestrictedhint);
    $this->addConfig('showrestrictedcats', $showrestrictedcats);
    $this->addConfig('showhidden', $params->get('cfg_showhidden', 0));
    $this->addConfig('show_always_expanded', $params->get('cfg_show_always_expanded', 0));
    $this->addConfig('disable_new', $params->get('cfg_disable_new', 0));
  }

  /**
   * Get the categories from JoomGallery
   *
   * @param   string  $dberror      database error
   * @return  object  $jgcat_rows   category objects
   */
  protected function getJgCats(&$dberror)
  {
    $dberror  = '';

    // First load all first level resp main categories
    $query = $this->_db->getQuery(true)
          ->select('cid')
          ->select('name')
          ->select('parent_id')
          ->select('level')
          ->select('access')
          ->select('hidden')
          ->select('owner')
          ->from(_JOOM_TABLE_CATEGORIES)
          ->where('published = 1')
          ->where('parent_id = 1')
          ->where('level     = 1');
    if(!$this->getConfig('showhidden'))
    {
      $query
          ->where('hidden    = 0');
    }
    $query->order($this->getConfig('sort_cat'));

    $this->_db->setQuery($query);

    try
    {
      $jgcat_rows = $this->_db->loadObjectList();
    }
    catch(RuntimeException $e)
    {
      $dberror = JText::_('MOD_JGTREEVIEW_DB_ERROR_LBL') . ': ' . $e->getMessage();
    }

    if(!empty($jgcat_rows) && !$dberror)
    {
      // Now load all other categories
      $query->clear('where');
      $query->clear('order');
      $query->where('published = 1')
            ->where('parent_id > 1')
            ->where('level     > 1');;
      if(!$this->getConfig('showhidden'))
      {
        $query
            ->where('hidden     = 0');
      }
      $query->order('level')
            ->order($this->getConfig('sort_subcat'));

      $this->_db->setQuery($query);

      try
      {
        $jgsubcat_rows = $this->_db->loadObjectList();
        if(!empty($jgsubcat_rows))
        {
          $jgcat_rows = array_merge($jgcat_rows, $jgsubcat_rows);
        }
      }
      catch(RuntimeException $e)
      {
        $dberror = JText::_('MOD_JGTREEVIEW_DB_ERROR_LBL') . ': ' . $e->getMessage();
      }
    }

    return isset($jgcat_rows) ? $jgcat_rows : null;
  }

  /**
   * Get category id for a given picture id
   *
   * @param   int     $picid    picture id
   * @return  int     $catid    category id
   */
  protected function getCatIdByPicId($picid)
  {
    $catid = 0;

    $query = $this->_db->getQuery(true)
          ->select('id')
          ->select('catid')
          ->from(_JOOM_TABLE_IMAGES)
          ->where('id = '. $picid);

    $this->_db->setQuery($query);

    try
    {
      $pic_row = $this->_db->loadObject();
      if($pic_row)
      {
        $catid = $pic_row->catid;
      }
    }
    catch(RuntimeException $e)
    {
    }

    return $catid;
  }

  /**
   * Get an image by a given category id
   *
   * @param   int     $catid    category Id
   * @return  int     image Id
   */
  protected function getImgIdByCatId($catid)
  {
    static $imgList = array();

    $imgId = null;

    if(!$imgList)
    {
      $subquery = $this->getImagesQuery();

      $sorting = 'jg.'.$this->getJConfig('jg_firstorder');
      if($this->getJConfig('jg_secondorder'))
      {
        $sorting .= ', jg.'.$this->getJConfig('jg_secondorder');
        if($this->getJConfig('jg_thirdorder'))
        {
          $sorting .= ', jg.'.$this->getJConfig('jg_thirdorder');
        }
      }

      $subquery->order($sorting);

      $query = $this->_db->getQuery(true)
            ->select('*')
            ->from($subquery, 'jgjgc')
            ->group('catid');

      $this->_db->setQuery($query);

      try
      {
        $imgList = $this->_db->loadObjectList('catid');
      }
      catch(RuntimeException $e)
      {
      }
    }

    if(isset($imgList[$catid]))
    {
      $imgId = $imgList[$catid]->id;
    }

    return $imgId;
  }

  /**
   * Create and include the dynamic css according to backend settings
   *
   */
  protected function renderCSS()
  {
    $document = JFactory::getDocument();
    // Add style for background color of active resp. selected node
    $css  = "    .dtree a.nodeSel {\n"
          . "      background-color:" . $this->getConfig('bgcolor_active_node') . ";\n"
          . "    }";
    $document->addStyleDeclaration($css);
  }

  /**
   * Delivers treeview node name and node link for a given category row object
   *
   * @param   object  $row        category row
   * @param   boolean $access     user access status for the given category
   * @param   boolean $protected  flag whether category is password protected
   * @param   string  $name       treeview node name for category
   * @param   string  $link       treeview node link for category
   *
   */
  protected function getTreeNodeNameAndLink($row, $access, $protected, &$cat_name, &$cat_link)
  {
    // Get current user object
    $user = JFactory::getUser();

    // Prepare category name and link
    if($this->getConfig('filter_cats') == false || $access || $protected)
    {
      // Shorten category name
      $max_len = $this->getConfig('max_len_catname');
      if($max_len > 0) {
        $abr = '...';
        if(strlen($row->name) >= $max_len && $max_len > strlen($abr))
        {
          $row->name = substr($row->name, 0, $max_len - strlen($abr));
          $row->name .= $abr;
        }
      }
      // Check access rights
      if($access || ($protected && ($row->parent_id == 1 ? true : isset($this->categories[$row->parent_id]))))
      {
        $cat_name = addslashes(trim($row->name));
        $cat_link = JRoute::_('index.php?option=com_joomgallery&view=category&catid=' . $row->cid . $this->getJoomId());
        if($this->getConfig('nodelink') == 1 && !$this->allcategories[$row->cid]->protected)
        {
          $imgId = $this->getImgIdByCatId($row->cid);
          if(!empty($imgId))
          {
            $cat_link = JRoute::_('index.php?option=com_joomgallery&view=detail&id=' . $imgId . $this->getJoomId());
          }
        }
      }
      else
      {
        $cat_name = ($this->getConfig('showrestrictedcats') == true ? addslashes(trim($row->name)) : JText::_('MOD_JGTREEVIEW_NO_ACCESS_LBL'));
        $cat_link = '';
      }
    }

    // Labeling category for restricted access
    if($this->getConfig('showrestrictedhint') == true)
    {
      $restricted = '';
      if(!$access)
      {
        if($protected && in_array($row->access, $user->getAuthorisedViewLevels()))
        {
          $restricted = '<span class="dtreerm">'.JHTML::_('joomgallery.icon', 'key.png', 'COM_JOOMGALLERY_COMMON_TIP_YOU_NOT_ACCESS_THIS_CATEGORY').'</span>';
        }
        else
        {
          $restricted = '<span class="dtreerm">'.JHTML::_('joomgallery.icon', 'group_key.png', 'COM_JOOMGALLERY_COMMON_TIP_YOU_NOT_ACCESS_THIS_CATEGORY').'</span>';
        }
      }
      $cat_name .= $restricted;
    }

    // 'New' labeling
    if($this->getJConfig('jg_showcatasnew') && !$this->getConfig('disable_new'))
    {
      $isnew = JoomHelper::checkNewCatg($row->cid);
    }
    else
    {
      $isnew = '';
    }
    $cat_name .= $isnew;
  }

  /**
   * Returns the treeview node to open
   *
   * @return    $openToNode
   */
  protected function getTreeOpenToNode()
  {
    $option = $this->_mainframe->input->getString('option', '');
    $view   = $this->_mainframe->input->getString('view', '');
    $catid  = $this->_mainframe->input->getInt('catid', 0);
    $picid  = $this->_mainframe->input->getInt('id', 0);

    $openToNode = -2;
    if($option == 'com_joomgallery')
    {
      switch($view)
      {
        case 'gallery':
          $openToNode = 0;
          break;
        case 'category':
          $openToNode = $catid;
          break;
        case 'detail':
          $openToNode = $this->getCatIdByPicId($picid);
          break;
        default:
          $openToNode = -1;
          break;
      }
    }
    return $openToNode;
  }

  /**
   * Function to clean a CSV list.
   *
   * @param    string    $csv_list
   * @return   string    $csv_list  cleaned CSV list
   */
  protected function cleanCSV($csv_list)
  {
    $search[0]  = '/[^0-9,]/m';
    $search[1]  = '/,{2,}/m';
    $search[2]  = '/,+$/m';
    $search[3]  = '/^,+/m';
    $replace[0] = ',';
    $replace[1] = ',';
    $replace[2] = '';
    $replace[3] = '';
    $csv_list   = preg_replace($search, $replace, trim($csv_list));

    return $csv_list;
  }

  /**
   * Function to check whether a category has to be hidden because of JoomGallery's
   * backend setting for 'jg_hideemptycats'.
   *
   * @param    int      catid
   * @return   boolean  True if category has to be hidden
   */
  protected function hideCategory($catid)
  {
    $hide = false;

    if($this->getJConfig('jg_hideemptycats'))
    {
      $subcatids = JoomHelper::getAllSubCategories($catid, true, ($this->getJConfig('jg_hideemptycats') == 1), true, ($this->getConfig('showhidden') == 0));
      // If 'jg_hideemptycats' is set to 1 the root category will always be in $subcatids, so check check
      // whether there are images in it
      if(   !count($subcatids)
        ||  (    count($subcatids) == 1
              && $this->getJConfig('jg_hideemptycats') == 1
              && $this->allcategories[$catid]->piccount == 0
            )
        )
      {
        $hide  = true;
      }
    }

    return $hide;
  }

  /**
   * Adds the dTree resources and builds up the neccessary javascript html output to
   * show the category tree
   *
   * @param    array     $jgcat_rows
   * @return   string    $script
   */
  public function buildTreeview($jgcat_rows)
  {
    // Include dTree script, dTree and jgtreeview styles
    $document = Jfactory::getDocument();
    $document->addStyleSheet(JURI::root().'media/mod_jgtreeview/css/dtree.css');
    $document->addStyleSheet(JURI::root().'media/mod_jgtreeview/css/jgtreeview.css');
    $document->addScript(JURI::root().'media/mod_jgtreeview/js/dtree.js');

    // Get current user object
    $user = JFactory::getUser();

    // Get module id
    $modid = $this->getConfig('modid');

    // Array to hold the valid parent categories
    $validParentCats = array();

    // Array with categories to filter
    $blacklistCats = explode(',', $this->getConfig('blacklist_cats'));

    // Get root category ID
    $root_catid = $this->getConfig('root_catid');

    // Create and configure dTree object
    $script  = "      var jgTreeView" . $modid . "= new dTree('jgTreeView" . $modid . "', " . "'" . $this->getConfig('icon_theme_path') . "');" . "\n";
    $script .= "      jgTreeView" . $modid . ".config.useCookies = true;" . "\n";
    $script .= "      jgTreeView" . $modid . ".config.inOrder = true;" . "\n";
    $script .= "      jgTreeView" . $modid . ".config.useSelection = true;" . "\n";
    $script .= "      jgTreeView" . $modid . ".config.useLines = " . $this->getConfig('grid') . ";" . "\n";

    $root_node_ok = false;
    if($root_catid == 1 && !$this->getConfig('usrmode'))
    {
      // Prepare root node
      $root_link = JRoute::_('index.php?option=com_joomgallery&view=gallery' . $this->getJoomId());
      $root_name = $this->getConfig('name');
      $root_locked = 'false';
      $root_node_ok = true;
    }
    else
    {
      $rootRow = new stdClass();
      if(!$this->getConfig('usrmode'))
      {
        // Standard mode, find root node category specified in modul configuration
        foreach($jgcat_rows AS $row)
        {
          if($row->cid == $root_catid)
          {
            $rootRow = $row;
            break;
          }
        }
      }
      else
      {
        // User mode, find the lowest level category node owned by the current user
        $root_catid = 1;
        $minLevel   = PHP_INT_MAX;
        foreach($jgcat_rows AS $row)
        {
          if($row->level < $minLevel && $user->get('id') && $row->owner == $user->get('id'))
          {
            $rootRow    = $row;
            $root_catid = $row->cid;
            $minLevel   = $row->level;
          }
        }
      }

      // Prepare root node
      if(isset($rootRow->cid) && $root_catid > 1)
      {
        // Check if user is allowed to access the root category
        $access = in_array($rootRow->access, $user->getAuthorisedViewLevels()) && isset($this->categories[$rootRow->cid]);
        if(
                (   $this->getConfig('filter_cats') == false
                 || $access
                 || ($this->allcategories[$rootRow->cid]->protected && ($rootRow->parent_id == 1 ? true : isset($this->categories[$rootRow->parent_id])))
                )
                && !in_array($root_catid, $blacklistCats)
                && !$this->hideCategory($rootRow->cid)
        )
        {
          $protected = $this->allcategories[$rootRow->cid]->protected ? true : false;
          $this->getTreeNodeNameAndLink($rootRow, $access, $protected, $root_name, $root_link);
          $root_locked = ($access ? 'false' :'true');
          $root_node_ok = true;
        }
      }
    }

    // Add root node
    if($root_node_ok == true)
    {
      $script .= "      jgTreeView" . $modid . ".add(" . $root_catid . ", -1, ";
      $script .= "'" . $root_name . "', ";
      $script .= "'" . $root_link . "', ";
      $script .= "'" . $root_locked . "');" ."\n";
      $validParentCats[$root_catid] = true;
    }

    foreach($jgcat_rows AS $row)
    {
      // Check if user is allowed to access the category
      $access = in_array($row->access, $user->getAuthorisedViewLevels()) && isset($this->categories[$row->cid]);

      // Get treview node name and node link
      $protected = $this->allcategories[$row->cid]->protected ? true : false;
      $this->getTreeNodeNameAndLink($row, $access, $protected, $cat_name, $cat_link);

      // Add nodes
      if($row->parent_id == $root_catid)
      {
        if(
               (   $this->getConfig('filter_cats') == false
                || $access
                || ($this->allcategories[$row->cid]->protected && ($row->parent_id == 1 ? true : isset($this->categories[$row->parent_id])))
               )
            && !in_array($row->cid, $blacklistCats)
            && $root_node_ok == true
            && !$this->hideCategory($row->cid)
          )
        {
          // It is a parent node with node id = $root_catid
          $script .= "      jgTreeView" . $modid . ".add(" . $row->cid . ", " . $root_catid . ", ";
          $script .= "'" . $cat_name . "', ";
          $script .= "'" . $cat_link . "', ";
          $script .= ($access ? 'false' : 'true') . ");" ."\n";
          $validParentCats[$row->cid] = true;
        }
      }
      else
      {
        if(
               (   $this->getConfig('filter_cats') == false
                || $access
                || ($this->allcategories[$row->cid]->protected && ($row->parent_id == 1 ? true : isset($this->categories[$row->parent_id])))
               )
            && isset($validParentCats[$row->parent_id])
            && !in_array($row->cid, $blacklistCats)
            && !$this->hideCategory($row->cid)
          )
        {
          // It is a child node
          $script .= "      jgTreeView" . $modid . ".add(" . $row->cid . ", " . $row->parent_id . ", ";
          $script .= "'" . $cat_name . "', ";
          $script .= "'" . $cat_link . "', ";
          $script .= ($access ? 'false' : 'true') . ");" ."\n";
          $validParentCats[$row->cid] = true;
        }
      }
    }
    $script .= "      document.write(jgTreeView" . $modid . ");" . "\n";

    if($root_node_ok == true)
    {
      $openToNode = $this->getTreeOpenToNode();
      $script .= "      switch(" . $openToNode . ")" . "\n";
      $script .= "      {" . "\n";
      $script .= "        case -2:" . "\n";
      // Not a JoomGallery view
      $script .= "          jgTreeView" . $modid . ".closeAll();" . "\n";
      // Unselect highlighted node
      $script .= "          jgTreeView" . $modid . ".us();" . "\n";
      $script .= "          break;" . "\n";
      $script .= "        case -1:" . "\n";
      // Unselect highlighted node
      $script .= "          jgTreeView" . $modid . ".us();" . "\n";
      $script .= "          break;" . "\n";
      $script .= "        case 0:" . "\n";
      // Select gallery's home, if root_catid equals one
      if($root_catid == 1 )
      {
        $script .= "          jgTreeView" . $modid . ".s(0);" . "\n";
      }
      else
      {
        $script .= "          jgTreeView" . $modid . ".us();" . "\n";
      }
      $script .= "          break;" . "\n";
      $script .= "        default:" . "\n";
      // Select category
      $script .= "          jgTreeView" . $modid . ".openTo(" . $openToNode . ", true);" . "\n";
      if($root_catid > 1 &&  $openToNode == $root_catid)
      {
        $script .= "          jgTreeView" . $modid . ".s(0);" . "\n";
      }
      $script .= "          break;" . "\n";
      $script .= "      }" . "\n";
      // Show tree always completely expanded
      if($this->getConfig('show_always_expanded'))
      {
        $script .= "      jgTreeView" . $modid . ".openAll()" . "\n";
      }
    }

    return $script;
  }
}