<?php
// autogenerated file 29.12.2011 14:54
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * PayPal account type. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PayPalAccountTypeCodeType.html
 *
 * @property string Personal
 * @property string Premier
 * @property string Business
 * @property string Unknown
 * @property string Invalid
 * @property string CustomCode
 */
class PayPalAccountTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Personal = 'Personal';
	const CodeType_Premier = 'Premier';
	const CodeType_Business = 'Business';
	const CodeType_Unknown = 'Unknown';
	const CodeType_Invalid = 'Invalid';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PayPalAccountTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PayPalAccountTypeCodeType = new PayPalAccountTypeCodeType();

?>
