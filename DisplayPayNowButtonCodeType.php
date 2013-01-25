<?php
// autogenerated file 22.07.2011 09:17
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Ways to Display PayNow Button 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DisplayPayNowButtonCodeType.html
 *
 * @property string ShowPayNowButtonForAllPaymentMethods
 * @property string ShowPayNowButtonForPayPalOnly
 * @property string CustomCode
 */
class DisplayPayNowButtonCodeType extends EbatNs_FacetType
{
	const CodeType_ShowPayNowButtonForAllPaymentMethods = 'ShowPayNowButtonForAllPaymentMethods';
	const CodeType_ShowPayNowButtonForPayPalOnly = 'ShowPayNowButtonForPayPalOnly';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DisplayPayNowButtonCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DisplayPayNowButtonCodeType = new DisplayPayNowButtonCodeType();

?>
