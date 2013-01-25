<?php
// autogenerated file 09.05.2012 13:08
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies a subcomponent of a date. Useful in cases when it is helpful to allow 
 * separate text fields or drop-down lists to be rendered for each date 
 * subcomponent. (For example, when calling GetProductSearchResults, you use date 
 * specifiers to indicate the date subcomponent that the attribute represents.) 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DateSpecifierCodeType.html
 *
 * @property string M
 * @property string D
 * @property string Y
 * @property string CustomCode
 */
class DateSpecifierCodeType extends EbatNs_FacetType
{
	const CodeType_M = 'M';
	const CodeType_D = 'D';
	const CodeType_Y = 'Y';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DateSpecifierCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DateSpecifierCodeType = new DateSpecifierCodeType();

?>
