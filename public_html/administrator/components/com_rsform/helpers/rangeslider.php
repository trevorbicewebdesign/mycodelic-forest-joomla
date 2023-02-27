<?php
/**
 * @package RSForm! Pro
 * @copyright (C) 2007-2019 www.rsjoomla.com
 * @license GPL, http://www.gnu.org/copyleft/gpl.html
 */

defined('_JEXEC') or die;

class RSFormProRangeSlider
{
	public $sliderOptions = array(); // store the javascript settings for each slider
	
	public static function getInstance()
	{
		static $slider;

		if ($slider === null)
		{
			$slider = new RSFormProRangeSlider;
		}
		
		return $slider;
	}
	
	public function setSlider($config)
	{
		extract($config);
		
		$this->sliderOptions[$formId][$customId]['type'] = strtolower($type);
		if (!$use_values) {
			$this->sliderOptions[$formId][$customId]['min'] = $min;
			$this->sliderOptions[$formId][$customId]['max'] = $max;
		} else {
			$values = str_replace(array("\r\n", "\r"), "\n", $values);
			$values = explode("\n", $values);
			$parsedValues = array();
			foreach ($values as $key => $value) {
				if (strpos($value, ';') !== false) {
					$tmpValues = explode(';', $value);
					$parsedValues = array_merge($parsedValues, $tmpValues);
				} else {
					$parsedValues[] = $value;
				}
			}
			$this->sliderOptions[$formId][$customId]['values'] = $values;
		}
		
		$skins = array(
			'FLAT' 	 => 'rsfp-skinFlat',
			'HTML5'	 => 'rsfp-skinHtml5',
			'MODERN' => 'rsfp-skinModern',
			'NICE'	 => 'rsfp-skinNice',
			'SIMPLE' => 'rsfp-skinSimple'
		);
		
		$skin = isset($skins[$skin]) ? $skins[$skin] : 'rsfp-skinFlat';
		
		$this->sliderOptions[$formId][$customId]['skin'] = $skin;
		$this->sliderOptions[$formId][$customId]['grid'] = $grid;
		if ($grid_snap && !$use_values) {
			$this->sliderOptions[$formId][$customId]['grid_snap'] = $grid_snap;
			$this->sliderOptions[$formId][$customId]['step'] = $step;
		}
		$this->sliderOptions[$formId][$customId]['force_edges'] = $force_edges;
		$this->sliderOptions[$formId][$customId]['from_fixed'] = $from_fixed;
		$this->sliderOptions[$formId][$customId]['to_fixed'] = $to_fixed;
		$this->sliderOptions[$formId][$customId]['keyboard'] = $keyboard;
		$this->sliderOptions[$formId][$customId]['disable'] = $disable;
		$this->sliderOptions[$formId][$customId]['input_values_separator'] = '-'; // lets keep this always
	}

	public function loadFiles()
	{
		static $done;

		if ($done)
		{
			return;
		}

		RSFormProAssets::addJquery();

		RSFormProAssets::addScript(JHtml::_('script', 'com_rsform/rangeslider/ion.rangeSlider.js', array('pathOnly' => true, 'relative' => true)));
		RSFormProAssets::addScript(JHtml::_('script', 'com_rsform/rangeslider/script.js', array('pathOnly' => true, 'relative' => true)));
		RSFormProAssets::addStyleSheet(JHtml::_('stylesheet', 'com_rsform/rangeslider/ion.rangeSlider.css', array('pathOnly' => true, 'relative' => true)));
		RSFormProAssets::addStyleSheet(JHtml::_('stylesheet', 'com_rsform/rangeslider/ion.rangeSlider.skin.css', array('pathOnly' => true, 'relative' => true)));

		$done = true;
	}
	
	public function printInlineScript($formId)
	{
		$this->loadFiles();

		$script = '';
		
		if (isset($this->sliderOptions[$formId]))
		{
			foreach ($this->sliderOptions[$formId] as $sliderId => $sliderConfigs) {
				$configs = array();
				foreach ($sliderConfigs as $type=>$value) {
					$configs[] = json_encode($type).':'.json_encode($value);
				}
				$script .= "RSFormPro.ionSlider.setSlider(".$formId.", '".$sliderId."', {".implode(', ',$configs)."});\n";
			}
		}
		
		return $script;
	}

	public function getPosition($formId, $componentId)
	{
		static $sliders = array();

		if (!isset($sliders[$formId]))
		{
			$sliders[$formId] = RSFormProHelper::componentExists($formId, RSFORM_FIELD_RANGE_SLIDER);
		}

		$position = (int) array_search($componentId, $sliders[$formId]);

		return $position;
	}
}