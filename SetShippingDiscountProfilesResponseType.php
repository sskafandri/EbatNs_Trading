<?php
// autogenerated file 10.09.2012 12:58
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * The response to a call of SetShippingDiscountProfiles. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SetShippingDiscountProfilesResponseType.html
 *
 */
class SetShippingDiscountProfilesResponseType extends AbstractResponseType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SetShippingDiscountProfilesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
