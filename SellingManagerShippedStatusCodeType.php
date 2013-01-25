<?php
// autogenerated file 29.12.2011 14:18
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Contains values for shipped status. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellingManagerShippedStatusCodeType.html
 *
 * @property string Shipped
 * @property string Unshipped
 * @property string CustomCode
 */
class SellingManagerShippedStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Shipped = 'Shipped';
	const CodeType_Unshipped = 'Unshipped';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellingManagerShippedStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SellingManagerShippedStatusCodeType = new SellingManagerShippedStatusCodeType();

?>
