<?php
// autogenerated file 29.12.2011 14:18
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the SellerContactDetailsEnabled feature. If the field is present, the 
 * category allows retrieval of seller-level contact information. The field is 
 * returned as an empty element (e.g., a boolean value is not returned).Added for 
 * Local Market users. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/LocalMarketSellerContactDetailsEnabledDefinitionType.html
 *
 */
class LocalMarketSellerContactDetailsEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('LocalMarketSellerContactDetailsEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
