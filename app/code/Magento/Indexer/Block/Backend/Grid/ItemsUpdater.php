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
namespace Magento\Indexer\Block\Backend\Grid;

class ItemsUpdater implements \Magento\View\Layout\Argument\UpdaterInterface
{
    /**
     * @var \Magento\AuthorizationInterface
     */
    protected $authorization;

    /**
     * @param \Magento\AuthorizationInterface $authorization
     */
    public function __construct(\Magento\AuthorizationInterface $authorization)
    {
        $this->authorization = $authorization;
    }

    /**
     * Remove massaction items in case they disallowed for user
     * @param mixed $argument
     * @return mixed
     */
    public function update($argument)
    {
        if (false === $this->authorization->isAllowed('Magento_Indexer::changeMode')) {
            unset($argument['change_mode_onthefly']);
            unset($argument['change_mode_changelog']);
        }
        return $argument;
    }
}
