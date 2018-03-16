<?php

namespace Loewenstark\Instagram2\Model\Config\Source;

class Format implements \Magento\Framework\Option\ArrayInterface
{
    /*
    * Add image format to Instagram Feed setup
    */

    public function toOptionArray()
    {
        return [
            ['value' => 'thumbnail', 'label' => __('Thumbnail (default) - 150x150')],
            ['value' => 'low_resolution', 'label' => __('Low Resolution - 306x306')],
            ['value' => 'standard_resolution', 'label' => __('Standard Resolution 612x612')]
        ];
    }
}