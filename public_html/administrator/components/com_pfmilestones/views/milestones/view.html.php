<?php
/**
 * @package      Projectfork
 * @subpackage   Milestones
 *
 * @author       Tobias Kuhn (eaxs)
 * @copyright    Copyright (C) 2006-2013 Tobias Kuhn. All rights reserved.
 * @license      http://www.gnu.org/licenses/gpl.html GNU/GPL, see LICENSE.txt
 */

defined('_JEXEC') or die();


jimport('joomla.application.component.view');


/**
 * Projectfork Milestones List View Class
 *
 */
class PFmilestonesViewMilestones extends JViewLegacy
{
    /**
     * List of items to display
     *
     * @var    array
     */
    protected $items;

    /**
     * JPagination instance object
     *
     * @var    object
     */
    protected $pagination;

    /**
     * Model state object
     *
     * @var    object
     */
    protected $state;

    /**
     * List of item authors
     *
     * @var    array
     */
    protected $authors;

    /**
     * Sql "null" date (0000-00-00 00:00:00)
     *
     * @var    string
     */
    protected $nulldate;

    /**
     * Indicates whether the site is running Joomla 2.5 or not
     *
     * @var    boolean
     */
    protected $is_j25;


    /**
     * Displays the view.
     *
     */
    public function display($tpl = null)
    {
        // Get data from model
        $this->items      = $this->get('Items');
        $this->pagination = $this->get('Pagination');
        $this->state      = $this->get('State');
        $this->authors    = $this->get('Authors');
        $this->nulldate   = JFactory::getDbo()->getNullDate();
        $this->is_j25     = version_compare(JVERSION, '3', 'lt');

        // Check for errors
        if (count($errors = $this->get('Errors'))) {
            JError::raiseError(500, implode("\n", $errors));
            return false;
        }

        if ($this->getLayout() !== 'modal') {
            $this->addToolbar();

            // Add the sidebar (Joomla 3 and up)
            if (!$this->is_j25) {
                $this->addSidebar();
                $this->sidebar = JHtmlSidebar::render();
            }
        }

        parent::display($tpl);
    }


    /**
     * Adds the page title and toolbar.
     *
     * @return    void
     */
    protected function addToolbar()
    {
        $user = JFactory::getUser();

        JToolBarHelper::title(JText::_('COM_PROJECTFORK_MILESTONES_TITLE'), 'article.png');

        if ($user->authorise('core.create', 'com_pfmilestones')) {
            JToolBarHelper::addNew('milestone.add');
        }

        if ($user->authorise('core.edit', 'com_pfmilestones') || $user->authorise('core.edit.own', 'com_pfmilestones')) {
            JToolBarHelper::editList('milestone.edit');
        }

        if ($user->authorise('core.edit.state', 'com_pfmilestones')) {
            JToolBarHelper::divider();
            JToolBarHelper::publish('milestones.publish', 'JTOOLBAR_PUBLISH', true);
            JToolBarHelper::unpublish('milestones.unpublish', 'JTOOLBAR_UNPUBLISH', true);
            JToolBarHelper::divider();
            JToolBarHelper::archiveList('milestones.archive');
            JToolBarHelper::checkin('milestones.checkin');
        }

        if ($this->state->get('filter.published') == -2 && $user->authorise('core.delete', 'com_pfmilestones')) {
            JToolBarHelper::deleteList('', 'milestones.delete','JTOOLBAR_EMPTY_TRASH');
            JToolBarHelper::divider();
        }
        elseif ($user->authorise('core.edit.state', 'com_pfmilestones')) {
            JToolBarHelper::trash('milestones.trash');
            JToolBarHelper::divider();
        }

        if ($user->authorise('core.admin')) {
            JToolBarHelper::preferences('com_pfmilestones');
        }
    }


    /**
     * Adds the page side bar for Joomla 3.0 and higher
     *
     * @return    void
     */
    protected function addSidebar()
    {
        JHtmlSidebar::setAction('index.php?option=com_pfmilestones&view=milestones');

        JHtmlSidebar::addFilter(
            JText::_('JOPTION_SELECT_PUBLISHED'),
            'filter_published',
            JHtml::_('select.options', JHtml::_('jgrid.publishedOptions'), 'value', 'text', $this->state->get('filter.published'), true)
        );

        JHtmlSidebar::addFilter(
            JText::_('JOPTION_SELECT_ACCESS'),
            'filter_access',
            JHtml::_('select.options', JHtml::_('access.assetgroups'), 'value', 'text', $this->state->get('filter.access'))
        );

        if ($this->state->get('filter.project')) {
            JHtmlSidebar::addFilter(
                JText::_('JOPTION_SELECT_AUTHOR'),
                'filter_author_id',
                JHtml::_('select.options', $this->authors, 'value', 'text', $this->state->get('filter.author_id'))
            );
        }
    }


    /**
     * Returns an array of fields the table can be sorted by.
     * Requires Joomla 3.0 or higher
     *
     * @return    array    Array containing the field name to sort by as the key and display text as value
     */
    protected function getSortFields()
    {
        return array(
            'a.state'       => JText::_('JSTATUS'),
            'a.title'       => JText::_('JGLOBAL_TITLE'),
            'project_title' => JText::_('JGRID_HEADING_PROJECT'),
            'a.end_date'    => JText::_('JGRID_HEADING_DEADLINE'),
            'access_level'  => JText::_('JGRID_HEADING_ACCESS'),
            'author_name'   => JText::_('JAUTHOR'),
            'a.created'     => JText::_('JDATE'),
            'a.id'          => JText::_('JGRID_HEADING_ID')
        );
    }
}
