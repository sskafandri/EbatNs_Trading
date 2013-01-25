<?php
// autogenerated file 29.12.2011 14:18
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Events that will trigger an automated feedback to a buyer. Applies to Selling 
 * Manager Pro users. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AutomatedLeaveFeedbackEventCodeType.html
 *
 * @property string PositiveFeedbackReceived
 * @property string PaymentReceived
 * @property string None
 * @property string CustomCode
 */
class AutomatedLeaveFeedbackEventCodeType extends EbatNs_FacetType
{
	const CodeType_PositiveFeedbackReceived = 'PositiveFeedbackReceived';
	const CodeType_PaymentReceived = 'PaymentReceived';
	const CodeType_None = 'None';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AutomatedLeaveFeedbackEventCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_AutomatedLeaveFeedbackEventCodeType = new AutomatedLeaveFeedbackEventCodeType();

?>
