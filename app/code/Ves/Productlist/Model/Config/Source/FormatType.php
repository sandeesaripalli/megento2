<?php

namespace Ves\Productlist\Model\Config\Source;

class FormatType implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'text', 'label' => __('Text')],
            ['value' => 'icon', 'label' => __('Icon')],
            ['value' => 'text-icon', 'label' => __('Text, Icon')],
            ['value' => 'icon-text', 'label' => __('Icon, Text')]
        ];
    }
}
