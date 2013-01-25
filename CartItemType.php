<?php
// autogenerated file 09.05.2012 12:48
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ModifyActionCodeType.php';
require_once 'ItemType.php';

/**
 * Details about an item in a cart. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CartItemType.html
 *
 */
class CartItemType extends EbatNs_ComplexType
{
	/**
	 * @var ItemType
	 */
	protected $Item;
	/**
	 * @var long
	 */
	protected $ReferenceID;
	/**
	 * @var ModifyActionCodeType
	 */
	protected $Action;

	/**
	 * @return ItemType
	 */
	function getItem()
	{
		return $this->Item;
	}
	/**
	 * @return void
	 * @param ItemType $value 
	 */
	function setItem($value)
	{
		$this->Item = $value;
	}
	/**
	 * @return long
	 */
	function getReferenceID()
	{
		return $this->ReferenceID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setReferenceID($value)
	{
		$this->ReferenceID = $value;
	}
	/**
	 * @return ModifyActionCodeType
	 */
	function getAction()
	{
		return $this->Action;
	}
	/**
	 * @return void
	 * @param ModifyActionCodeType $value 
	 */
	function setAction($value)
	{
		$this->Action = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CartItemType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Item' =>
					array(
						'required' => false,
						'type' => 'ItemType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReferenceID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Action' =>
					array(
						'required' => false,
						'type' => 'ModifyActionCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
