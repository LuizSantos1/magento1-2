<?php

class Integrai_Core_Model_ProcessEvents extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('integrai/processEvents');
    }

    public function teste(){
        return array( 1 => "a");
    }
}