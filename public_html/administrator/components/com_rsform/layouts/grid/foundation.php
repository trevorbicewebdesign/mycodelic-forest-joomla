<?php
/**
* @package RSForm! Pro
* @copyright (C) 2007-2019 www.rsjoomla.com
* @license GPL, http://www.gnu.org/copyleft/gpl.html
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

require_once __DIR__ . '/grid.php';

class RSFormProGridFoundation extends RSFormProGrid
{
	public function generate()
	{
		$html = array();
		
		// Show title
		if ($this->showFormTitle) {
			$html[] = '<h2>{global:formtitle}</h2>';
		}
		
		// Error placeholder
		$html[] = '{error}';
		
		// Start with a page
		foreach ($this->pages as $page_index => $rows)
		{
			$html[] = '<!-- Do not remove this ID, it is used to identify the page so that the pagination script can work correctly -->';

			$classes = array('formContainer');
			if (count($this->pages) > 1)
			{
				$classes[] = 'formHidden';
			}

			$html[] = '<fieldset class="' . implode(' ', $classes) . '" id="rsform_{global:formid}_page_' . $page_index . '">';
			foreach ($rows as $row_index => $row)
			{
				// Start a new row
				$html[] = "\t".'<div class="grid-x grid-padding-x">';
				
				foreach ($row['columns'] as $column_index => $fields)
				{
					$size = $row['sizes'][$column_index];
					
					$html[] = "\t"."\t".'<div class="medium-' . (int) $size . ' cell">';
					
					foreach ($fields as $field)
					{
						if (isset($this->components[$field]))
						{
							if (!$this->components[$field]->Published)
							{
								continue;
							}
							
							$html[] = $this->generateField($this->components[$field]);
						}
					}
					
					$html[] = "\t"."\t".'</div>';
				}
				
				$html[] = "\t".'</div>';
			}
			$html[] = '</fieldset>';
		}
		
		foreach ($this->hidden as $field)
		{
			if (isset($this->components[$field]))
			{
				if (!$this->components[$field]->Published)
				{
					continue;
				}
				
				$html[] = $this->generateField($this->components[$field]);
			}
		}
		
		return implode("\n", $html);
	}
	
	protected function generateField($data)
	{
		$html = array();
		
		// Placeholders
		$placeholders = array(
			'body' 		 	=> '{' . $data->ComponentName . ':body}',
			'caption'	 	=> '{' . $data->ComponentName . ':caption}',
			'description' 	=> '{' . $data->ComponentName . ':descriptionhtml}',
			'error' 	 	=> '{' . $data->ComponentName . ':errorClass}',
			'validation' 	=> '{' . $data->ComponentName . ':validation}',
		);
		
		// Some fields should span the entire width
		if ($data->ComponentTypeId == RSFORM_FIELD_FREETEXT)
		{
			$block = $this->getBlock($data->ComponentName);
			$type = $this->getBlock($data->ComponentTypeName);

			$html[] = "\t"."\t"."\t".'<div class="grid-x grid-padding-x rsform-block rsform-block-' . $block . ' rsform-type-' . $type . $placeholders['error'] . '">';
			$html[] = "\t"."\t"."\t"."\t"."\t".$placeholders['body'];
			$html[] = "\t"."\t"."\t".'</div>';
		}
		elseif (in_array($data->ComponentTypeId, $this->hiddenComponents))
		{
			$html[] = "\t"."\t"."\t"."\t"."\t".$placeholders['body'];
		}
		else
		{
			$block = $this->getBlock($data->ComponentName);
			$type = $this->getBlock($data->ComponentTypeName);

			$html[] = "\t"."\t"."\t".'<div class="grid-x grid-padding-x rsform-block rsform-block-' . $block . ' rsform-type-' . $type . $placeholders['error'] . '">';
				if ($data->ComponentTypeId != RSFORM_FIELD_PAGEBREAK)
				{
					$label = '';

					if ($this->formOptions->FormLayoutFlow == static::FLOW_VERTICAL)
					{
						$label .= '{if ' . $placeholders['caption'] . '}' . "\n";
					}

					$label .= "\t"."\t"."\t"."\t"."\t".'<label class="formControlLabel has-tip middle" data-tooltip aria-haspopup="true" data-disable-hover="false" title="' . $placeholders['description'] . '"';
					$label .= $this->generateFor($data);
					$label .= '>';
					$label .= $placeholders['caption'];
					if ($data->Required && $this->requiredMarker)
					{
						$label .= '<strong class="formRequired">' . $this->requiredMarker . '</strong>';
					}
					$label .= '</label>';

					if ($this->formOptions->FormLayoutFlow == static::FLOW_VERTICAL)
					{
						$label .= "\n" . '{/if}';
					}
				}

				$size = ($this->formOptions->FormLayoutFlow == static::FLOW_HORIZONTAL) ? 3 : 12;
				$html[] = "\t"."\t"."\t"."\t".'<div class="medium-' . $size . ' cell">';
				if ($data->ComponentTypeId != RSFORM_FIELD_PAGEBREAK)
				{
					$html[] = $label;
				}
				$html[] = "\t" . "\t" . "\t" . "\t" . '</div>';
				$html[] = "\t" . "\t" . "\t" . "\t" . '<div ' . $this->fieldAttributes($data) . '>';
				$html[] = "\t"."\t"."\t"."\t"."\t".$placeholders['body'];
				if ($data->ComponentTypeId != RSFORM_FIELD_PAGEBREAK)
				{
					$html[]	= "\t"."\t"."\t"."\t"."\t".'<span class="formValidation">' . $placeholders['validation'] . '</span>';
				}
				$html[] = "\t" . "\t" . "\t" . "\t" . '</div>';

			$html[] = "\t"."\t"."\t".'</div>';
		}
		
		// If it's a CAPTCHA field and the removing CAPTCHA is enabled, must wrap it in {if}
		if (in_array($data->ComponentTypeId, RSFormProHelper::$captchaFields) && !empty($this->formOptions->RemoveCaptchaLogged)) {
			array_unshift($html, '{if {global:userid} == "0"}');
			array_push($html, '{/if}');
		}
		
		return implode("\n", $html);
	}

	protected function fieldAttributes($data)
	{
		$classes = array('formControls');

		if ($this->formOptions->FormLayoutFlow == static::FLOW_VERTICAL)
		{
			$classes[] = 'medium-12';
		}
		else
		{
			$classes[] = 'medium-9';
		}

		$classes[] = 'cell';

		$attr = 'class="' . implode(' ', $classes) . '"';
		if (in_array($data->ComponentTypeId, array(RSFORM_FIELD_CHECKBOXGROUP, RSFORM_FIELD_RADIOGROUP)) || in_array($data->ComponentId, $this->checkboxes) || in_array($data->ComponentId, $this->radiogroups))
		{
			$attr .= ' role="group" aria-labelledby="' . $data->ComponentName . '-grouplbl"';
		}

		return $attr;
	}
}