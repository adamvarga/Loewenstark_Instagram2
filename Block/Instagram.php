<?php

namespace Loewenstark\Instagram2\Block;


class Instagram extends \Magento\Framework\View\Element\Template
{
    // Define the default scope

    const STORESCOPE = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;

    // Get setup paths

    const ENABLE = 'ls_instagram2_setup/general/enable';
    const ACCESS_TOKEN = 'ls_instagram2_setup/general/access_token';
    const USER_ID = 'ls_instagram2_setup/general/user_id';
    const CONTAINER_NAME = 'ls_instagram2_setup/general/container_name';
    const CONTAINER_POSITION = 'ls_instagram2_setup/general/container_position';
    const IMAGE_FORMAT = 'ls_instagram2_setup/display_setup/image_format';
    const IMAGE_SORT = 'ls_instagram2_setup/display_setup/image_sort';
    const LIMIT = 'ls_instagram2_setup/display_setup/limit';
    const LIKES = 'ls_instagram2_setup/display_setup/likes';

    /*
     * Get setup scope
     */

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->_scopeConfig = $scopeConfig;
    }

    /*
    * Modul active check
    */

    protected function _toHtml()
    {

        if (!$this->_scopeConfig->getValue(self::ENABLE, self::STORESCOPE)) {
            return '';
        }
        return parent::_toHtml();
    }

    /*
     * Get Instagram access token
     */

    public function getAccessToken()
    {
        return $this->_scopeConfig->getValue(self::ACCESS_TOKEN, self::STORESCOPE);
    }

    /*
     * Get Instagram user id
     */

    public function getUserId()
    {
        return $this->_scopeConfig->getValue(self::USER_ID, self::STORESCOPE);
    }

    /*
     * Get container id for feed
     */

    public function getContainerBox()
    {
        return $this->_scopeConfig->getValue(self::CONTAINER_NAME, self::STORESCOPE);
    }
    /*
     * Get container position page for feed
     */

    public function getContainerPosition()
    {
        $container_position = $this->_scopeConfig->getValue(self::CONTAINER_POSITION, self::STORESCOPE);
        return $container_position;
    }

    /*
     * Get image format
     */

    public function getImageFormat()
    {
        $image_format = $this->_scopeConfig->getValue(self::IMAGE_FORMAT, self::STORESCOPE);
        return $image_format;
    }

    /*
     * Sort image
     */

    public function getImageSort()
    {
        $image_sort = $this->_scopeConfig->getValue(self::IMAGE_SORT, self::STORESCOPE);
        return $image_sort;
    }

    /*
     * Get image limit
     */

    public function getLimit()
    {
        $limit = (int)$this->_scopeConfig->getValue(self::LIMIT, self::STORESCOPE);
        if ($limit) {
            return $limit;
        } else {
            return 99;
        }
    }

    /*
     * Get likes from instagram
     */

    public function getLikes()
    {
        $likes = $this->_scopeConfig->getValue(self::LIKES, self::STORESCOPE);
        if ($likes) {
            return '<div class="like-box"><span>{{likes}}</span></div>';
        }
    }

}