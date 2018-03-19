<?php

namespace Loewenstark\Instagram2\Model\Config\Source;

class Position implements \Magento\Framework\Option\ArrayInterface
{
    /*
    * Add container position to Instagram Feed setup
    */

    public function toOptionArray()
    {
        return [
            ['value' => 'index', 'label' => __('Home page')],
            ['value' => 'category', 'label' => __('Category page')],
            ['value' => 'product', 'label' => __('Product page')]
        ];
    }
}