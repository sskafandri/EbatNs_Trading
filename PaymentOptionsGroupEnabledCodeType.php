<?php
// autogenerated file 09.05.2012 13:19
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Enumerated type that lists the possible states for DE and AT categories in 
 * regards to the new eBay payment process. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PaymentOptionsGroupEnabledCodeType.html
 *
 * @property string eBayPaymentProcessEnabled
 * @property string NonStandardPaymentsEnabled
 * @property string eBayPaymentProcessExcluded
 * @property string CustomCode
 */
class PaymentOptionsGroupEnabledCodeType extends EbatNs_FacetType
{
	const CodeType_eBayPaymentProcessEnabled = 'eBayPaymentProcessEnabled';
	const CodeType_NonStandardPaymentsEnabled = 'NonStandardPaymentsEnabled';
	const CodeType_eBayPaymentProcessExcluded = 'eBayPaymentProcessExcluded';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PaymentOptionsGroupEnabledCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PaymentOptionsGroupEnabledCodeType = new PaymentOptionsGroupEnabledCodeType();

?>
