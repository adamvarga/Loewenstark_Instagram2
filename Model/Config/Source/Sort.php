<?php

namespace Loewenstark\Instagram2\Model\Config\Source;

class Sort implements \Magento\Framework\Option\ArrayInterface
{
    /*
    * Add image sort to Instagram Feed setup
    */

    public function toOptionArray()
    {
        return [
            ['value' => 'none', 'label' => __('Default - As they come from Instagram')],
            ['value' => 'most-recent', 'label' => __('Newest to oldest')],
            ['value' => 'least-recent', 'label' => __('Oldest to newest')],
            ['value' => 'most-liked', 'label' => __('Highest # of likes to lowest')],
            ['value' => 'least-liked', 'label' => __('Lowest # likes to highest')],
            ['value' => 'most-commented', 'label' => __('Highest # of comments to lowest')],
            ['value' => 'least-commented', 'label' => __('Lowest # of comments to highest')],
            ['value' => 'random', 'label' => __('Random order')]
        ];
    }
}