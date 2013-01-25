<?php
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'ItemType.php';
require_once 'AbstractRequestType.php';

/**
 * Defines and lists a new fixed-price listing (not auction-style listings).The 
 * main difference between AddFixedPriceItem and AddItem is thatAddFixedPriceItem 
 * supports the creation of fixed-price listings only,whereas AddItem supports all 
 * listing formats.<br><br>Also, only AddFixedPriceItem supports multi-variation 
 * listingsand tracking inventory by SKU. AddItem does not supportVariations or 
 * InventoryTrackingMethod.<br><br>See the AddFixedPriceItem documentation for 
 * additional information. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddFixedPriceItemRequestType.html
 *
 */
class AddFixedPriceItemRequestType extends AbstractRequestType
{
	/**
	 * @var ItemType
	 */
	protected $Item;

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
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AddFixedPriceItemRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
					)
				));
	}
}
?>
