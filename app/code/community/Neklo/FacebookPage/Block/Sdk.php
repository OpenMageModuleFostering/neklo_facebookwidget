<?php
class Neklo_FacebookPage_Block_Sdk extends Mage_Core_Block_Template
{
    /**
     * @return bool
     */
    public function canShow()
    {
        return $this->getConfig()->isEnabled();
    }

    /**
     * @return Neklo_FacebookPage_Helper_Config
     */
    public function getConfig()
    {
        return Mage::helper('neklo_facebookpage/config');
    }
}