<?php
// autogenerated file 15.11.2010 08:29
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Indicates the source of the item's eligibility for the BuyerProtection Program. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BuyerProtectionSourceCodeType.html
 *
 * @property string eBay
 * @property string PayPal
 * @property string CustomCode
 */
class BuyerProtectionSourceCodeType extends EbatNs_FacetType
{
	const CodeType_eBay = 'eBay';
	const CodeType_PayPal = 'PayPal';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BuyerProtectionSourceCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_BuyerProtectionSourceCodeType = new BuyerProtectionSourceCodeType();

?>