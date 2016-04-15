<?php

namespace Ves\Productlist\Model\Config\Source;

class HeightType implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'custom', 'label' => __('Custom Height')],
            ['value' => 'equal', 'label' => __('Auto Equal Height')],
			['value' => '', 'label' => __('Auto Height')]
        ];
    }
}
