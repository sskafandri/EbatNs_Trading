<?php
// autogenerated file 09.05.2012 13:11
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Indicates whether counter offers are allowed on best offers for this 
 * category.Returned only if this category overrides the site default.Added for 
 * EbayMotors Pro users. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/eBayMotorsProCounterOfferEnabledDefinitionType.html
 *
 */
class eBayMotorsProCounterOfferEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('eBayMotorsProCounterOfferEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
