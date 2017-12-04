# Magento Honeypot

This magento 1.x module implements the honeypot technique. It basically adds a new block (formhoneypot) which contains an
hidden input that if filled will be skipped in hookToControllerActionPreDispatch using the events in Magento.

It can be simply customized changing the phtml file in 

_app/design/frontend/base/default/template/honeypot/formhoneypot.phtml_

The input name can be easily customized in the Magento backend navigating in Thelema -> Honeypot
