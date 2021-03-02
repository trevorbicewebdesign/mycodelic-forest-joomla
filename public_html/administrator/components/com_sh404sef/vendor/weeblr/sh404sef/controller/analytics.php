<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier - Weeblr llc - 2020
 * @package     sh404SEF
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     4.21.0.4206
 * @date        2020-06-26
 */

namespace Weeblr\Sh404sef\Controller;

use Weeblr\Wblib\V_SH4_4206\Base;

// Security check to ensure this file is being included by a parent file.
defined('WBLIB_EXEC') || die;

Class Analytics extends Base\Base
{
	/**
	 * Collect all required data for a given report.
	 *
	 * @return array|Exception
	 * @throws Exception
	 */
	public function getReportData($options)
	{
		$data = array();

		$model = $this->factory->getA(
			'Weeblr\Sh404sef\Model\Analytics',
			$this->factory->getThe(
				'sh404sef.config'
			)
		);

		// prepare the view options, based on request
		$data['options'] = $model->loadRequestOptions($options);

		// fetch data from Analytics servers
		$data['analytics_data'] = $model->getReportData(
			$data['options']
		);

		// check for errors
		if ($data['analytics_data']->status !== true)
		{
			$data = new \Exception(
				$data['analytics_data']->statusMessage,
				404
			);
		}

		return $data;
	}
}
