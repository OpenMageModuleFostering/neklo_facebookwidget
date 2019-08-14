<?php

class Neklo_FacebookPage_Model_Source_Tabs
{
    const TIMELINE_CODE  = 'timeline';
    const TIMELINE_LABEL = 'Timeline';

    const EVENTS_CODE  = 'events';
    const EVENTS_LABEL = 'Events';

    const MESSAGES_CODE  = 'messages';
    const MESSAGES_LABEL = 'Messages';

    public function toOptionArray()
    {
        $helper = Mage::helper('neklo_facebookpage');
        return array(
            array(
                'value' => self::TIMELINE_CODE,
                'label' => $helper->__(self::TIMELINE_LABEL),
            ),
            array(
                'value' => self::EVENTS_CODE,
                'label' => $helper->__(self::EVENTS_LABEL),
            ),
            array(
                'value' => self::MESSAGES_CODE,
                'label' => $helper->__(self::MESSAGES_LABEL),
            ),
        );
    }

    public function toArray()
    {
        $helper = Mage::helper('neklo_facebookpage');
        return array(
            self::TIMELINE_CODE => $helper->__(self::TIMELINE_LABEL),
            self::EVENTS_CODE   => $helper->__(self::EVENTS_LABEL),
            self::MESSAGES_CODE => $helper->__(self::MESSAGES_LABEL),
        );
    }
}