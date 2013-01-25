<?php
// autogenerated file 10.09.2012 12:58
// $Id: $
// $Log: $
//
//
require_once 'AmountType.php';

/**
 * The order line item against which the refund was issued.If an order ID is 
 * present, it indicates that the refund was issued against the entire order.If an 
 * item ID and transaction ID are present, that indicates that the refund was 
 * issued against that particular order line item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RefundLineType.html
 *
 */
class RefundLineType extends AmountType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RefundLineType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}	$this->_attributes = array_merge($this->_attributes,
		array(
			'type' =>
			array(
				'name' => 'type',
				'type' => 'RefundLineTypeCodeType',
				'use' => 'required'
			)
		));

	}
}
?>
