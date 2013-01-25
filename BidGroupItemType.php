<?php
// autogenerated file 09.05.2012 13:04
// $Id: $
// $Log: $
//
//
require_once 'BidGroupItemStatusCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'ItemType.php';
require_once 'AmountType.php';

/**
 * Contains information about items that are part of a bid group. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BidGroupItemType.html
 *
 */
class BidGroupItemType extends EbatNs_ComplexType
{
	/**
	 * @var ItemType
	 */
	protected $Item;
	/**
	 * @var BidGroupItemStatusCodeType
	 */
	protected $BidGroupItemStatus;
	/**
	 * @var AmountType
	 */
	protected $MaxBidAmount;

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
	 * @return BidGroupItemStatusCodeType
	 */
	function getBidGroupItemStatus()
	{
		return $this->BidGroupItemStatus;
	}
	/**
	 * @return void
	 * @param BidGroupItemStatusCodeType $value 
	 */
	function setBidGroupItemStatus($value)
	{
		$this->BidGroupItemStatus = $value;
	}
	/**
	 * @return AmountType
	 */
	function getMaxBidAmount()
	{
		return $this->MaxBidAmount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setMaxBidAmount($value)
	{
		$this->MaxBidAmount = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BidGroupItemType', 'urn:ebay:apis:eBLBaseComponents');
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
					'BidGroupItemStatus' =>
					array(
						'required' => false,
						'type' => 'BidGroupItemStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaxBidAmount' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
