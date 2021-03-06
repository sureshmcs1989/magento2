<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @copyright   Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Magento\Url;

interface QueryParamsResolverInterface
{
    /**
     * Get query params part of url
     *
     * @param bool $escape "&" escape flag
     * @return string
     */
    public function getQuery($escape = false);

    /**
     * Set URL query param(s)
     *
     * @param mixed $data
     * @return \Magento\Url\QueryParamsResolverInterface
     */
    public function setQuery($data);

    /**
     * Set query param
     *
     * @param string $key
     * @param mixed $data
     * @return \Magento\Url\QueryParamsResolverInterface
     */
    public function setQueryParam($key, $data);

    /**
     * Return Query Params
     *
     * @return array
     */
    public function getQueryParams();

    /**
     * Purge Query params array
     *
     * @return \Magento\Url\QueryParamsResolverInterface
     */
    public function purgeQueryParams();

    /**
     * Set query Params as array
     *
     * @param array $data
     * @return \Magento\Url\QueryParamsResolverInterface
     */
    public function setQueryParams(array $data);

    /**
     * Unset data from the object.
     *
     * @param null|string|array $key
     * @return \Magento\Object
     */
    public function unsetData($key = null);
}
