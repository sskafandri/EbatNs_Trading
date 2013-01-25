<?php
// autogenerated file 09.05.2012 13:08
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Basic type for specifying measures and the system of measurement.A decimal value 
 * (e.g., 10.25) is meaningfulas a measure when accompanied by a definition of the 
 * unit of measure (e.g., Pounds),in which case the value specifies the quantity of 
 * that unit.A MeasureType expresses both the value (a decimal) and, optionally, 
 * the unit andthe system of measurement.Details such as shipping weights are 
 * specified as measure types. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MeasureType.html
 *
 */
class MeasureType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MeasureType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}	$this->_attributes = array_merge($this->_attributes,
		array(
			'unit' =>
			array(
				'name' => 'unit',
				'type' => 'token',
				'use' => 'required'
			),
			'measurementSystem' =>
			array(
				'name' => 'measurementSystem',
				'type' => 'MeasurementSystemCodeType',
				'use' => 'required'
			)
		));

	}
}
?>
