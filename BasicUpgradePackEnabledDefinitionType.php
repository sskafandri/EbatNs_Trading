<?php
// autogenerated file 15.11.2010 08:39
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Not applicable to any site. Formerly applicable to theAustralia site (site ID 
 * 15, abbreviation AU) only. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BasicUpgradePackEnabledDefinitionType.html
 *
 */
class BasicUpgradePackEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BasicUpgradePackEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
