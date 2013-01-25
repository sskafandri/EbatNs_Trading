<?php
// autogenerated file 09.05.2012 13:19
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Indicates who owns the user's address. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddressOwnerCodeType.html
 *
 * @property string PayPal
 * @property string eBay
 * @property string CustomCode
 */
class AddressOwnerCodeType extends EbatNs_FacetType
{
	const CodeType_PayPal = 'PayPal';
	const CodeType_eBay = 'eBay';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AddressOwnerCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_AddressOwnerCodeType = new AddressOwnerCodeType();

?>
