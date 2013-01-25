<?php
// autogenerated file 10.09.2012 12:49
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Currently applies to tickets. May apply to other categories in the future. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/QuantityInfoType.html
 *
 */
class QuantityInfoType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $MinimumRemnantSet;

	/**
	 * @return int
	 */
	function getMinimumRemnantSet()
	{
		return $this->MinimumRemnantSet;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMinimumRemnantSet($value)
	{
		$this->MinimumRemnantSet = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('QuantityInfoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'MinimumRemnantSet' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
