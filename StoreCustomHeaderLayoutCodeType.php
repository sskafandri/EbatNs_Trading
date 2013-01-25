<?php
// autogenerated file 15.11.2010 08:39
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies whether the Store has a custom header. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreCustomHeaderLayoutCodeType.html
 *
 * @property string NoHeader
 * @property string CustomHeaderShown
 * @property string CustomCode
 */
class StoreCustomHeaderLayoutCodeType extends EbatNs_FacetType
{
	const CodeType_NoHeader = 'NoHeader';
	const CodeType_CustomHeaderShown = 'CustomHeaderShown';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreCustomHeaderLayoutCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_StoreCustomHeaderLayoutCodeType = new StoreCustomHeaderLayoutCodeType();

?>
