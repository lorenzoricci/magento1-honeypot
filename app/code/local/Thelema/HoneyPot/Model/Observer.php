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

class Thelema_HoneyPot_Model_Observer
{
    /**
     *
     * @param Varien_Event_Observer $observer
     */
    public function hookToControllerActionPreDispatch($observer) {
        $requestUri = $observer->getEvent()->getControllerAction()->getRequest()->getRequestUri();

        /* @var $controller Mage_Core_Controller_Front_Action */
        $controller = $observer->getEvent()->getControllerAction();
        /* @var $request Mage_Core_Controller_Request_Http */
        $request    = $controller->getRequest();
        /* @var $response Mage_Core_Controller_Response_Http */
        $response   = $controller->getResponse();

        $params = Mage::app()->getRequest()->getParams();

        $honeypotName = Mage::getSingleton('thelema_honeypot/pot')->getFormHoney();

        if (array_key_exists($honeypotName, $params) && !empty($params[$honeypotName]) ){
            $response->setRedirect(Mage::getBaseUrl());
            $controller->setFlag('', Mage_Core_Controller_Varien_Action::FLAG_NO_DISPATCH, true);
        }
    }
}