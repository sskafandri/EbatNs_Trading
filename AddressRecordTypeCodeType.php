<?php
// autogenerated file 29.12.2011 14:42
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Codes indicate the address type. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddressRecordTypeCodeType.html
 *
 * @property string Residential
 * @property string Business
 * @property string CustomCode
 */
class AddressRecordTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Residential = 'Residential';
	const CodeType_Business = 'Business';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AddressRecordTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_AddressRecordTypeCodeType = new AddressRecordTypeCodeType();

?>
