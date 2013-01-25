<?php
// autogenerated file 09.05.2012 13:11
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Fields in this type provide IDs and values for item conditions (in 
 * GetCategoryFeatures). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ConditionType.html
 *
 */
class ConditionType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $ID;
	/**
	 * @var string
	 */
	protected $DisplayName;

	/**
	 * @return int
	 */
	function getID()
	{
		return $this->ID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setID($value)
	{
		$this->ID = $value;
	}
	/**
	 * @return string
	 */
	function getDisplayName()
	{
		return $this->DisplayName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDisplayName($value)
	{
		$this->DisplayName = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ConditionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DisplayName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
