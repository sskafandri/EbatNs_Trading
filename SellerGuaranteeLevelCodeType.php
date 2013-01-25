<?php
// autogenerated file 09.05.2012 13:00
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Maximum level of guarantee a seller is authorized to offer. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellerGuaranteeLevelCodeType.html
 *
 * @property string NotEligible
 * @property string Regular
 * @property string Premium
 * @property string Ultra
 * @property string CustomCode
 */
class SellerGuaranteeLevelCodeType extends EbatNs_FacetType
{
	const CodeType_NotEligible = 'NotEligible';
	const CodeType_Regular = 'Regular';
	const CodeType_Premium = 'Premium';
	const CodeType_Ultra = 'Ultra';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellerGuaranteeLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SellerGuaranteeLevelCodeType = new SellerGuaranteeLevelCodeType();

?>
