<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Sincco\Pago\Model\ResourceModel\AdditionalData;

use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\Data\Collection\Db\FetchStrategyInterface;
use Magento\Framework\Data\Collection\EntityFactoryInterface;
use Magento\Framework\Event\ManagerInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Psr\Log\LoggerInterface;

class Collection extends AbstractCollection
{
	protected $_idFieldName = 'entity_id';
	protected $total;
	public function __construct(EntityFactoryInterface $entityFactory,
		LoggerInterface $logger,
		FetchStrategyInterface $fetchStrategy,
		ManagerInterface $eventManager,
		AdapterInterface $connection = null,
		AbstractDb $resource = null)
	{
		parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $connection, $resource);
	}

	public function _construct()
	{
		$this->_init('Sincco\Pago\Model\AdditionalData','Sincco\Pago\Model\ResourceModel\AdditionalData');
	}

	protected function _initSelect()
	{
		parent::_initSelect();
	}

}
