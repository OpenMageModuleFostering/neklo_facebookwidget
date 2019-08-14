<?php
class Neklo_FacebookPage_Block_Widget_Page extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface
{
    const FACEBOOK_URL = 'https://www.facebook.com/';

    const WIDTH_DEFAULT = 340;
    const WIDTH_MIN = 180;
    const WIDTH_MAX = 500;

    const HEIGHT_DEFAULT = 500;
    const HEIGHT_MIN = 70;

    const TABS_DEFAULT = 'timeline';

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->getConfig()->isEnabled() && $this->getData('is_enabled') && $this->hasData('href');
    }

    /**
     * @return null|string
     */
    public function getHref()
    {
        if (!$this->hasData('href')) {
            return null;
        }
        return self::FACEBOOK_URL . $this->getData('href');
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        if (!$this->hasData('width')) {
            return self::WIDTH_DEFAULT;
        }
        $width = (int)$this->getData('width');
        if ($width < self::WIDTH_MIN) {
            return self::WIDTH_MIN;
        }
        if ($width > self::WIDTH_MAX) {
            return self::WIDTH_MAX;
        }
        return $width;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        if (!$this->hasData('height')) {
            return self::HEIGHT_DEFAULT;
        }
        $height = (int)$this->getData('height');
        if ($height < self::HEIGHT_MIN) {
            return self::HEIGHT_MIN;
        }
        return $height;
    }

    /**
     * @return string
     */
    public function getTabs()
    {
        if (!$this->hasData('tabs')) {
            return self::TABS_DEFAULT;
        }
        return $this->getData('tabs');
    }

    /**
     * @return bool
     */
    public function isHideCover()
    {
        if (!$this->hasData('hide_cover')) {
            return false;
        }
        return !!$this->getData('hide_cover');
    }

    /**
     * @return bool
     */
    public function isShowFacepile()
    {
        if (!$this->hasData('show_facepile')) {
            return true;
        }
        return !!$this->getData('show_facepile');
    }

    /**
     * @return bool
     */
    public function isHideCta()
    {
        if (!$this->hasData('hide_cta')) {
            return false;
        }
        return !!$this->getData('hide_cta');
    }

    /**
     * @return bool
     */
    public function isSmallHeader()
    {
        if (!$this->hasData('small_header')) {
            return false;
        }
        return !!$this->getData('small_header');
    }

    /**
     * @return bool
     */
    public function isAdaptContainerWidth()
    {
        if (!$this->hasData('adapt_container_width')) {
            return true;
        }
        return !!$this->getData('adapt_container_width');
    }

    /**
     * @return Neklo_FacebookPage_Helper_Config
     */
    public function getConfig()
    {
        return Mage::helper('neklo_facebookpage/config');
    }
}