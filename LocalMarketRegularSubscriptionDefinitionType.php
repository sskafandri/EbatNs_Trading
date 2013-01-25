<?php
// autogenerated file 09.05.2012 13:15
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the LocalMarketRegularSubscription feature. If this field is present, 
 * the corresponding feature applies to the category. The field is returned as an 
 * empty element (i.e., a boolean value is not returned). A subscription for Local 
 * Market for Vehicles will be returned by GetUser if a dealer has subscribed to 
 * any of the following Local Market Regular sub-types: Vehicles Regular Six 
 * Months, Vehicles Regular Special Promotion, Vehicles Regular Multistore Level S, 
 * Vehicles Regular Multistore Level M, or Vehicles Regular Multistore Level L. 
 * Each of these sub-types has a separate discount and billing cycle. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/LocalMarketRegularSubscriptionDefinitionType.html
 *
 */
class LocalMarketRegularSubscriptionDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('LocalMarketRegularSubscriptionDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
