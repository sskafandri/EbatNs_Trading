<?php
// autogenerated file 09.05.2012 13:15
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies the various warranty type being offered. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/WarrantyTypeOptionsCodeType.html
 *
 * @property string ReplacementWarranty
 * @property string DealerWarranty
 * @property string ManufacturerWarranty
 * @property string CustomCode
 */
class WarrantyTypeOptionsCodeType extends EbatNs_FacetType
{
	const CodeType_ReplacementWarranty = 'ReplacementWarranty';
	const CodeType_DealerWarranty = 'DealerWarranty';
	const CodeType_ManufacturerWarranty = 'ManufacturerWarranty';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('WarrantyTypeOptionsCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_WarrantyTypeOptionsCodeType = new WarrantyTypeOptionsCodeType();

?>
