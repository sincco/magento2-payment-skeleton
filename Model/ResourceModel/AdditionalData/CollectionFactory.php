<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Sincco\Pago\Model\ResourceModel\AdditionalData;

class CollectionFactory
{
	/**
	 * Object Manager instance
	 *
	 * @var \Magento\Framework\ObjectManagerInterface
	 */
	private $objectManager = null;
	/**
	 * Instance name to create
	 *
	 * @var string
	 */
	private $instanceName = null;

	/**
	 * Factory constructor
	 *
	 * @param \Magento\Framework\ObjectManagerInterface $objectManager
	 * @param string $instanceName
	 */
	public function __construct(
		\Magento\Framework\ObjectManagerInterface $objectManager,
		$instanceName = '\\Sincco\\Pago\\Model\\ResourceModel\\AdditionalData\\Collection'
	) {
		$this->objectManager = $objectManager;
		$this->instanceName = $instanceName;
	}

	/**
	 * {@inheritdoc}
	 */
	public function create(array $data = array())
	{
		return $this->objectManager->create($this->instanceName, $data);
	}
}
