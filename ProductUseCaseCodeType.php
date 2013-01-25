<?php
// autogenerated file 22.07.2011 08:57
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies the context in which the product selling page is being called,which 
 * will imply certain validation rules. Use this code list to make sureyou retrieve 
 * the appropriate version of product information and characteristicmeta-data when 
 * you are listing an item with Pre-filled Item Information. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ProductUseCaseCodeType.html
 *
 * @property string AddItem
 * @property string ReviseItem
 * @property string RelistItem
 * @property string CustomCode
 */
class ProductUseCaseCodeType extends EbatNs_FacetType
{
	const CodeType_AddItem = 'AddItem';
	const CodeType_ReviseItem = 'ReviseItem';
	const CodeType_RelistItem = 'RelistItem';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ProductUseCaseCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ProductUseCaseCodeType = new ProductUseCaseCodeType();

?>
