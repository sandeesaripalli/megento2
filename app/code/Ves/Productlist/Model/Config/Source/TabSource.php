<?php

namespace Ves\Productlist\Model\Config\Source;
class TabSource implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        $sources = [];
        $sources[] = [
        'value' => 'latest',
        'label' => 'Latest'];
        $sources[] = [
        'value' => 'new_arrival',
        'label' => 'New Arrival'];
        $sources[] = [
        'value' => 'special',
        'label' => 'Special'];
        $sources[] = [
        'value' => 'most_popular',
        'label' => 'Most Popular'];
        $sources[] = [
        'value' => 'best_seller',
        'label' => 'Best Seller'];
        $sources[] = [
        'value' => 'top_rated',
        'label' => 'Top Rated'];
        $sources[] = [
        'value' => 'random',
        'label' => 'Random'];
        $sources[] = [
        'value' => 'featured',
        'label' => 'Featured'];
        $sources[] = [
        'value' => 'deals',
        'label' => 'Deals'];
        return $sources;
    }
}