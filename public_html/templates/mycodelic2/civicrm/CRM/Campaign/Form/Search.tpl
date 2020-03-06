{*
 +--------------------------------------------------------------------+
 | CiviCRM version 5                                                  |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2019                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*}
{* Search form and results for voters *}
{include file='CRM/Campaign/Form/Search/Common.tpl' context='search'}

{if $rowsEmpty || $rows}
<div class="crm-content-block crm-search-form-block">
{if $rowsEmpty}
<div class="crm-content-block">
  <div class="crm-results-block crm-results-block-empty">
    {include file="CRM/Campaign/Form/Search/EmptyResults.tpl"}
  </div>
</div>
{/if}

{if $rows}
<div class="crm-content-block">
  <div class="crm-results-block">
    {* Search request has returned 1 or more matching rows. Display results and collapse the search criteria fieldset. *}
    {assign var="showBlock" value="'searchForm_show'"}
    {assign var="hideBlock" value="'searchForm'"}

    {* Search request has returned 1 or more matching rows. *}
    <fieldset>
      <div class="crm-search-tasks">
       {* This section handles form elements for action task select and submit *}
       {include file="CRM/common/searchResultTasks.tpl" context="Campaign"}
      </div>
      <div class="crm-search-results">
       {* This section displays the rows along and includes the paging controls *}
       {include file="CRM/Campaign/Form/Selector.tpl" context="Search"}
      </div>
    </fieldset>
    {* END Actions/Results section *}
  </div>
</div>
{/if}
</div>
{/if}