<?php
// autogenerated file 29.12.2011 14:54
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the PayPal Required feature. If the field ispresent, the corresponding 
 * feature applies to the category. The field is returnedas an empty element (i.e., 
 * a boolean value is not returned). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PayPalRequiredDefinitionType.html
 *
 */
class PayPalRequiredDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PayPalRequiredDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
