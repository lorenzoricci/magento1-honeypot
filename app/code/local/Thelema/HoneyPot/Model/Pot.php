<?php
/**
 * Thelema
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Thelema Commercial License
 * that is bundled with this package in the file LICENSE.txt.
 *
 * @category    Thelema
 * @package     Thelema_HoneyPot
 * @copyright   Copyright (c) 2013-2017 HoneyPot (http://www.thelema-ict.com)
 * @author      Lorenzo Ricci <lricci@thelema-ict.com>
 * @license     http://www.thelema-ict.com/commercial-license-agreement  Thelema Commercial License
 */

class Thelema_HoneyPot_Model_Pot extends Varien_Object
{
    protected $prefix = '';

    public function __construct($data = array())
    {
        $this->prefix = isset($data['prefix']) ? $data['prefix'] : '';
    }

    /**
     * Retrieve form honeypot name
     *
     * @return string
     */
    public function getFormHoney()
    {
        return sprintf("%s%s", $this->prefix,  Mage::getStoreConfig('thelema_honeypot/honeypot/input_name'));
    }


}