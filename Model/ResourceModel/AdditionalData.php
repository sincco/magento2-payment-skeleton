<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Sincco\Pago\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class AdditionalData extends AbstractDb {

	protected function _construct()
	{
		$this->_init('additional_data', 'entity_id');
	}

}
