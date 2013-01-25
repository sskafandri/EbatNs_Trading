<?php
// autogenerated file 09.05.2012 13:19
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Indicates whether automatic accept of best offers is allowed for this 
 * category.Returned only if this category overrides the site default.Added for 
 * EbayMotors Pro users. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/eBayMotorsProAutoAcceptEnabledDefinitionType.html
 *
 */
class eBayMotorsProAutoAcceptEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('eBayMotorsProAutoAcceptEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
