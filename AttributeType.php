<?php
// autogenerated file 10.09.2012 12:49
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ValType.php';

/**
 * A salient aspect or feature of an item. On eBay.com, this information is used in 
 * the Item Specificssection of a listing to describe an itemin a standard way so 
 * that buyers can find it more easily. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AttributeType.html
 *
 */
class AttributeType extends EbatNs_ComplexType
{
	/**
	 * @var ValType
	 */
	protected $Value;

	/**
	 * @return ValType
	 * @param integer $index 
	 */
	function getValue($index = null)
	{
		if ($index !== null) {
			return $this->Value[$index];
		} else {
			return $this->Value;
		}
	}
	/**
	 * @return void
	 * @param ValType $value 
	 * @param  $index 
	 */
	function setValue($value, $index = null)
	{
		if ($index !== null) {
			$this->Value[$index] = $value;
		} else {
			$this->Value = $value;
		}
	}
	/**
	 * @return void
	 * @param ValType $value 
	 */
	function addValue($value)
	{
		$this->Value[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AttributeType', 'http://www.w3.org/2001/XMLSchema');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Value' =>
					array(
						'required' => false,
						'type' => 'ValType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));	$this->_attributes = array_merge($this->_attributes,
		array(
			'attributeID' =>
			array(
				'name' => 'attributeID',
				'type' => 'int',
				'use' => 'required'
			),
			'attributeLabel' =>
			array(
				'name' => 'attributeLabel',
				'type' => 'string',
				'use' => 'required'
			)
		));

	}
}
?>
