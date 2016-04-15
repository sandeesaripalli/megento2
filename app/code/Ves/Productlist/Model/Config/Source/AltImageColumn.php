<?php

namespace Ves\Productlist\Model\Config\Source;
class AltImageColumn implements \Magento\Framework\Option\ArrayInterface
{
	protected  $_blockModel;

    /**
     * @param \Magento\Cms\Model\Block $blockModel
     */
    public function __construct(
    	\Magento\Cms\Model\Block $blockModel
    	) {
    	$this->_groupModel = $blockModel;
    }

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        $blocks = [];
        $blocks[] = [
        'value' => 'label',
        'label' => 'Label'];
        $blocks[] = [
        'value' => 'position',
        'label' => 'Sort Order'];
        return $blocks;
    }
}