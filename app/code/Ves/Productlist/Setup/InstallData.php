<?php

namespace Ves\Productlist\Setup;

use Magento\Framework\Module\Setup\Migration;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Eav\Setup\EavSetupFactory;

class InstallData implements InstallDataInterface
{
	/**
	 * Brand Factory
	 *
	 * @var BrandFactory
	 */
	private $brandFactory;

      private $eavSetupFactory;

	/**
	 * @param BrandFactory $brandFactory 
	 * @param GroupFactory $groupFactory 
	 */
	public function __construct(
		EavSetupFactory $eavSetupFactory
		)
	{
		$this->eavSetupFactory = $eavSetupFactory;
	}

	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
 		$eavSetup->addAttribute(
                \Magento\Catalog\Model\Product::ENTITY, 'featured', [
            'group' => 'General',
            'type' => 'int',
            'sort_order' => 102,
            'backend' => '',
            'frontend' => '',
            'label' => 'Is Featured',
            'input' => 'boolean',
            'class' => '',
            'source' => 'Magento\Eav\Model\Entity\Attribute\Source\Boolean',
            'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_GLOBAL,
            'visible' => true,
            'required' => false,
            'user_defined' => true,
            'default' => '',
            'searchable' => false,
            'filterable' => false,
            'comparable' => false,
            'visible_on_front' => false,
            'used_in_product_listing' => true,
            'unique' => false,
            'apply_to' => 'simple,configurable,virtual,bundle,downloadable'
        ]);
	}
	
}