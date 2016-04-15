<?php

namespace Ves\Productlist\Model\Config\Source;
class LayoutType implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        $layouts = [];
        $layouts[] = [
        'value' => 'owl_carousel',
        'label' => 'OWL Carousel'];
        $layouts[] = [
        'value' => 'bootstrap_carousel',
        'label' => 'Bootstrap Carousel'];
        return $layouts;
    }
}