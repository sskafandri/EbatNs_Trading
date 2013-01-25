<?php
// autogenerated file 22.07.2011 08:57
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'NameValueListArrayType.php';
require_once 'VariationsType.php';

/**
 * Describes a Selling Manager Template 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellingManagerProductSpecificsType.html
 *
 */
class SellingManagerProductSpecificsType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $PrimaryCategoryID;
	/**
	 * @var VariationsType
	 */
	protected $Variations;
	/**
	 * @var NameValueListArrayType
	 */
	protected $ItemSpecifics;

	/**
	 * @return string
	 */
	function getPrimaryCategoryID()
	{
		return $this->PrimaryCategoryID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPrimaryCategoryID($value)
	{
		$this->PrimaryCategoryID = $value;
	}
	/**
	 * @return VariationsType
	 */
	function getVariations()
	{
		return $this->Variations;
	}
	/**
	 * @return void
	 * @param VariationsType $value 
	 */
	function setVariations($value)
	{
		$this->Variations = $value;
	}
	/**
	 * @return NameValueListArrayType
	 */
	function getItemSpecifics()
	{
		return $this->ItemSpecifics;
	}
	/**
	 * @return void
	 * @param NameValueListArrayType $value 
	 */
	function setItemSpecifics($value)
	{
		$this->ItemSpecifics = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellingManagerProductSpecificsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PrimaryCategoryID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Variations' =>
					array(
						'required' => false,
						'type' => 'VariationsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemSpecifics' =>
					array(
						'required' => false,
						'type' => 'NameValueListArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
