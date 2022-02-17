<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Sincco\Pago\Model;

use Magento\Framework\Model\AbstractModel;

class AdditionalData extends AbstractModel implements \Magento\Framework\DataObject\IdentityInterface {

	const CACHE_TAG = 'additional_data';

	protected function _construct()
	{
		$this->_init('Sincco\Pago\Model\ResourceModel\AdditionalData');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

}