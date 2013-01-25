<?php
// autogenerated file 09.05.2012 13:19
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the Motors Local Market feature. If the Motors Local Market field is 
 * present, the corresponding feature applies to the Motors Local Market category. 
 * The field is returned as an empty element (e.g., a boolean value is not 
 * returned). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MotorsLocalMarketEnabledDefinitionType.html
 *
 */
class MotorsLocalMarketEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MotorsLocalMarketEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
