<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author       Yannick Gaultier
 * @copyright    (c) Yannick Gaultier - Weeblr llc - 2020
 * @package      sh404SEF
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version      ${str.version}
 *
 * 2020-06-26
 *
 */

namespace Weeblr\Wblib\V_SH4_4206\Api;

use Weeblr\Wblib\V_SH4_4206\Base;

defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

/**
 * Parse and manage the named parameters of an API request.
 *
 */
class Helper extends Base\Base
{
    /**
     * Handles an API request, calling the controller method that the route
     * found suited for that request.
     *
     * @param $controllerName
     * @param $controllerMethod
     * @param $request
     *
     * @return mixed
     */
    public function handle($controllerName, $controllerMethod, $request)
    {
        $options = array_merge(
            $request->getParameters()->getArray(),
            $request->getQuery()->getArray()
        );

        $controller = $this->factory->getA($controllerName);
        $data = $controller->{$controllerMethod}($request, $options);

        if ($data instanceof \Exception) {
            $request->setResponseStatus(
                $data->getCode()
            )->addResponseErrors(
                array(
                    array(
                        'code' => $data->getCode(),
                        'message' => $data->getMessage()
                    )
                )
            )->addResponseMeta(
                array(
                    'count' => 0,
                    'total' => 0
                )
            );

            return $request;
        }

        $data['data'] = wbArrayGet($data, 'data', array());
        $data['count'] = wbArrayGet($data, 'count', 0);
        $data['total'] = wbArrayGet($data, 'total', 0);

        $responseLinks = $this->getPagination(
            $request,
            $options,
            $data['total']
        );

        $request
            ->setResponseData(
                $data['data']
            )->addResponseLinks(
                $responseLinks
            )->addResponseMeta(
                array(
                    'count' => $data['count'],
                    'total' => $data['total']
                )
            );

        return $request;
    }

    /**
     * Computes an array holding links to current, next, prev, first and last
     * pages of a list.
     *
     * @param Request $request
     * @param array $options Parameters passed in request.
     * @param int $total Total number of items existing.
     *
     * @return array
     */
    public function getPagination($request, $options, $total)
    {
        // at least link to self
        $responseLinks = array(
            'self' => $request->routeLink(),
        );

        $perPage = (int)wbArrayGet($options, 'per_page', 10);
        // @TODO: sanitize, set a per_page maximum value (in plugin settings? should be per route).
        $perPage = min(100, $perPage);
        $totalPages = ceil($total / $perPage);

        $page = (int)wbArrayGet($options, 'page', 1);
        // validate page requested
        $page = $page < 1 ? 1 : $page;

        // first
        if ($totalPages > 1 && $page > 1) {
            $responseLinks['first'] = $request->routeLink(
                null,
                array(
                    'page' => 1,
                    'per_page' => $perPage
                )
            );
        }

        // next
        if ($page < $totalPages) {
            $responseLinks['next'] = $request->routeLink(
                null,
                array(
                    'page' => $page + 1,
                    'per_page' => $perPage
                )
            );
        }

        // previous
        if ($page > 1) {
            $responseLinks['prev'] = $request->routeLink(
                null,
                array(
                    'page' => $page - 1,
                    'per_page' => $perPage
                )
            );
        }

        // last
        if ($totalPages > 1 && $page < $totalPages) {
            $responseLinks['last'] = $request->routeLink(
                null,
                array(
                    'page' => $totalPages,
                    'per_page' => $perPage
                )
            );
        }

        return $responseLinks;
    }
}
