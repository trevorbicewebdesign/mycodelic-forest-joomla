<?php
/**
 * @package      Projectfork
 * @subpackage   Users
 *
 * @author       Tobias Kuhn (eaxs)
 * @copyright    Copyright (C) 2006-2012 Tobias Kuhn. All rights reserved.
 * @license      http://www.gnu.org/licenses/gpl.html GNU/GPL, see LICENSE.txt
 */

defined('_JEXEC') or die();


jimport('joomla.application.component.controller');


/**
 * Projects main controller
 *
 * @see    JController
 */
class PFusersController extends JControllerLegacy
{
    /**
     * Displays the current view
     *
     * @param     boolean    $cachable    If true, the view output will be cached  (Not Used!)
     * @param     array      $urlparams   An array of safe url parameters and their variable types (Not Used!)
     *
     * @return    JController             A JController object to support chaining.
     */
    public function display($cachable = false, $urlparams = false)
    {
        // Load CSS and JS assets
        JHtml::_('pfhtml.style.bootstrap');
        JHtml::_('pfhtml.style.projectfork');

        JHtml::_('pfhtml.script.jQuery');
        JHtml::_('pfhtml.script.bootstrap');
        JHtml::_('pfhtml.script.projectfork');

        JHtml::_('behavior.tooltip');

        // Override method arguments
        $urlparams = array('id'               => 'INT',
                           'cid'              => 'ARRAY',
                           'limit'            => 'INT',
                           'limitstart'       => 'INT',
                           'showall'          => 'INT',
                           'return'           => 'BASE64',
                           'filter'           => 'STRING',
                           'filter_order'     => 'CMD',
                           'filter_order_Dir' => 'CMD',
                           'filter_search'    => 'STRING'
                           );


        // Display the view
        parent::display($cachable, $urlparams);

        // Return own instance for chaining
        return $this;
    }
}