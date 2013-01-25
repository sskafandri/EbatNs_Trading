<?php
// autogenerated file 09.05.2012 13:04
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the DutchBINEnabled feature. If the field is present, the Buy It Now 
 * isenabled in this category for Ducth (multi-item) auctions. The field is 
 * returned as anempty element (i.e., a boolean value is not 
 * returned).<br><br><span class="tablenote"><strong>Note:</strong>As of version 
 * 619, Dutch-style (multi-item) competitive-bid auctions are deprecated.eBay 
 * throws an error if you submit a Dutch item listing with AddItemor VerifyAddItem. 
 * If you use RelistItem to update a Dutch auction listing,eBay generates a warning 
 * and resets the Quantity value to 1.</span><br> 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DutchBINEnabledDefinitionType.html
 *
 */
class DutchBINEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DutchBINEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
