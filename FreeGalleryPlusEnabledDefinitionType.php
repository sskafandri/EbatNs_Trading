<?php
// autogenerated file 15.11.2010 08:34
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the feature for free, automatic upgrades for Gallery Plus.If the field 
 * is present, the corresponding feature applies to the category.The field is 
 * returned as an empty element (i.e., a boolean value is not returned). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FreeGalleryPlusEnabledDefinitionType.html
 *
 */
class FreeGalleryPlusEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FreeGalleryPlusEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
