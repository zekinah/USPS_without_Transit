<?php
/**
* USPS Remove Transit Time
* @author Zekinah Joy Lecaors
* @copyright Copyright (c) 2019 Zekinah Lecaros (https://github.com/zekinah)
* @package Zjel_Usps
* @extends Mage_Usa_Model_Shipping_Carrier_Usps
*/
class Zjel_Usps_Model_Usa_Shipping_Carrier_Usps extends Mage_Usa_Model_Shipping_Carrier_Usps {
    function _filterServiceName($name) {
        $name = parent::_filterServiceName($name);
		// Trim out the number of days, and an optional leading space.
        if( !Mage::getStoreConfig('carriers/usps/show_number_of_days') )
            $name = preg_replace('/\s*\d{1,}-day/i', '', $name); 

        return $name;
    }
}