<?php
// autogenerated file 10.09.2012 12:44
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Font size selection for Store configuration. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreFontSizeCodeType.html
 *
 * @property string XXS
 * @property string XS
 * @property string S
 * @property string M
 * @property string L
 * @property string XL
 * @property string XXL
 * @property string CustomCode
 */
class StoreFontSizeCodeType extends EbatNs_FacetType
{
	const CodeType_XXS = 'XXS';
	const CodeType_XS = 'XS';
	const CodeType_S = 'S';
	const CodeType_M = 'M';
	const CodeType_L = 'L';
	const CodeType_XL = 'XL';
	const CodeType_XXL = 'XXL';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreFontSizeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_StoreFontSizeCodeType = new StoreFontSizeCodeType();

?>
