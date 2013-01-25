<?php
// autogenerated file 15.11.2010 08:39
// $Id: $
// $Log: $
//
//
require_once 'DateSpecifierCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'ValType.php';
require_once 'RangeCodeType.php';

/**
 * A product or item aspect or feature that can be used as a criterion in a 
 * searchfor catalog content or for listed items.For example, "Format" might be a 
 * criterion for searching the catalogs forPre-filled Item Information related to 
 * hardcover books. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SearchAttributesType.html
 *
 */
class SearchAttributesType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $AttributeID;
	/**
	 * @var DateSpecifierCodeType
	 */
	protected $DateSpecifier;
	/**
	 * @var RangeCodeType
	 */
	protected $RangeSpecifier;
	/**
	 * @var ValType
	 */
	protected $ValueList;

	/**
	 * @return int
	 */
	function getAttributeID()
	{
		return $this->AttributeID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setAttributeID($value)
	{
		$this->AttributeID = $value;
	}
	/**
	 * @return DateSpecifierCodeType
	 */
	function getDateSpecifier()
	{
		return $this->DateSpecifier;
	}
	/**
	 * @return void
	 * @param DateSpecifierCodeType $value 
	 */
	function setDateSpecifier($value)
	{
		$this->DateSpecifier = $value;
	}
	/**
	 * @return RangeCodeType
	 */
	function getRangeSpecifier()
	{
		return $this->RangeSpecifier;
	}
	/**
	 * @return void
	 * @param RangeCodeType $value 
	 */
	function setRangeSpecifier($value)
	{
		$this->RangeSpecifier = $value;
	}
	/**
	 * @return ValType
	 * @param integer $index 
	 */
	function getValueList($index = null)
	{
		if ($index !== null) {
			return $this->ValueList[$index];
		} else {
			return $this->ValueList;
		}
	}
	/**
	 * @return void
	 * @param ValType $value 
	 * @param  $index 
	 */
	function setValueList($value, $index = null)
	{
		if ($index !== null) {
			$this->ValueList[$index] = $value;
		} else {
			$this->ValueList = $value;
		}
	}
	/**
	 * @return void
	 * @param ValType $value 
	 */
	function addValueList($value)
	{
		$this->ValueList[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SearchAttributesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'AttributeID' =>
					array(
						'required' => true,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '1..1'
					),
					'DateSpecifier' =>
					array(
						'required' => false,
						'type' => 'DateSpecifierCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RangeSpecifier' =>
					array(
						'required' => false,
						'type' => 'RangeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ValueList' =>
					array(
						'required' => false,
						'type' => 'ValType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
