<?php
// autogenerated file 10.09.2012 12:49
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Max Flat Shipping Cost 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MaxFlatShippingCostDefinitionType.html
 *
 */
class MaxFlatShippingCostDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MaxFlatShippingCostDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
