<?php
/**
 * @package      pkg_projectfork
 * @subpackage   com_pftasks
 *
 * @author       Tobias Kuhn (eaxs)
 * @copyright    Copyright (C) 2006-2013 Tobias Kuhn. All rights reserved.
 * @license      http://www.gnu.org/licenses/gpl.html GNU/GPL, see LICENSE.txt
 */

defined('_JEXEC') or die();


if (version_compare(JVERSION, '3.2.0', '>=')) {
    class PFtableTaskCompat extends JTable
    {
        protected function _getAssetParentIdCompat($table = null, $id = null)
        {
            return 1;
        }

        protected function _getAssetParentId(JTable $table = null, $id = null)
        {
            return $this->_getAssetParentIdCompat($table, $id);
        }
    }
}
else {
    class PFtableTaskCompat extends JTable
    {
        protected function _getAssetParentIdCompat($table = null, $id = null)
        {
            return 1;
        }

        protected function _getAssetParentId($table = null, $id = null)
        {
            return $this->_getAssetParentIdCompat($table, $id);
        }
    }
}