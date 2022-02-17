<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Sincco\Pago\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
	public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
	{
		$installer = $setup;
		$installer->startSetup();

        $table = $installer->getConnection()
        ->newTable($installer->getTable('additional_data'))
        ->addColumn(
            'entity_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true,'nullable' => false,'primary' => true,'unsigned' => true],
            'ID'
        )
        ->addColumn(
            'id_order',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            100,
            ['identity' => false,'nullable' => false,'unsigned' => true],
            'ID Order'
        )
        ->addColumn(
            'customer_name',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            ['identity' => false,'nullable' => false,'unsigned' => true],
            'Customer Name'
        );
        $installer->getConnection()->createTable($table);
        
		$installer->endSetup();
	}
}