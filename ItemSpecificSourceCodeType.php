<?php
// autogenerated file 22.07.2011 08:53
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Defines the system source for an Item Specific. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ItemSpecificSourceCodeType.html
 *
 * @property string ItemSpecific
 * @property string Attribute
 * @property string Product
 * @property string CustomCode
 */
class ItemSpecificSourceCodeType extends EbatNs_FacetType
{
	const CodeType_ItemSpecific = 'ItemSpecific';
	const CodeType_Attribute = 'Attribute';
	const CodeType_Product = 'Product';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ItemSpecificSourceCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ItemSpecificSourceCodeType = new ItemSpecificSourceCodeType();

?>
