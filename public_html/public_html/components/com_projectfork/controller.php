<?php
/**
 * @package      Projectfork
 * @subpackage   Dashboard
 *
 * @author       Tobias Kuhn (eaxs)
 * @copyright    Copyright (C) 2006-2012 Tobias Kuhn. All rights reserved.
 * @license      http://www.gnu.org/licenses/gpl.html GNU/GPL, see LICENSE.txt
 */

defined('_JEXEC') or die();


jimport('joomla.application.component.controller');


/**
 * Projectfork main controller
 *
 * @see    JController
 */
class ProjectforkController extends JControllerLegacy
{
    /**
     * Constructor
     *
     * @param    array    $config    Optional config options
     */
    function __construct($config = array())
    {
        parent::__construct($config);
    }


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

        JHtml::_('pfhtml.script.jquery');
        JHtml::_('pfhtml.script.bootstrap');
        JHtml::_('pfhtml.script.projectfork');

        JHtml::_('behavior.tooltip');

        // Override method arguments
        $urlparams = array('id'               => 'INT',
                           'filter_project'   => 'CMD'
                           );


        // Display the view
        parent::display($cachable, $urlparams);

        // Return own instance for chaining
        return $this;
    }
}