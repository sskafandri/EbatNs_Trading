<?php
// autogenerated file 15.11.2010 08:39
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Indicates whether the category supports using an address when contacting the 
 * seller for Classified Ad format listings. Added for Local Market users. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/LocalMarketContactByAddressEnabledDefinitionType.html
 *
 */
class LocalMarketContactByAddressEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('LocalMarketContactByAddressEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
