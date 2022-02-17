<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Sincco\Pago\Observer;

use Magento\Framework\Event\Observer;
use Magento\Payment\Observer\AbstractDataAssignObserver;

class SaveDataObserver extends AbstractDataAssignObserver
{
    protected $_additionalData;

    public function __construct(
		\Sincco\Pago\Model\AdditionalDataFactory $additionalData
	)
	{
		$this->_additionalData = $additionalData;
	}

    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        $order = $observer->getEvent()->getOrder();
        $register = $this->_additionalData->create();
        $registerData = [
            'id_order' => $order->getId(),
            'customer_name' => $order->getCustomerName()
        ];
        $register->addData($registerData);
        $register->save();
    }
}
