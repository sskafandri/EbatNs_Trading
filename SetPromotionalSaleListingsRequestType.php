<?php
// autogenerated file 10.09.2012 12:49
// $Id: $
// $Log: $
//
//
require_once 'ItemIDArrayType.php';
require_once 'ModifyActionCodeType.php';
require_once 'AbstractRequestType.php';

/**
 * Type defining the <b>SetPromotionalSaleListings</b> call request. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SetPromotionalSaleListingsRequestType.html
 *
 */
class SetPromotionalSaleListingsRequestType extends AbstractRequestType
{
	/**
	 * @var long
	 */
	protected $PromotionalSaleID;
	/**
	 * @var ModifyActionCodeType
	 */
	protected $Action;
	/**
	 * @var ItemIDArrayType
	 */
	protected $PromotionalSaleItemIDArray;
	/**
	 * @var long
	 */
	protected $StoreCategoryID;
	/**
	 * @var long
	 */
	protected $CategoryID;
	/**
	 * @var boolean
	 */
	protected $AllFixedPriceItems;
	/**
	 * @var boolean
	 */
	protected $AllStoreInventoryItems;
	/**
	 * @var boolean
	 */
	protected $AllAuctionItems;

	/**
	 * @return long
	 */
	function getPromotionalSaleID()
	{
		return $this->PromotionalSaleID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setPromotionalSaleID($value)
	{
		$this->PromotionalSaleID = $value;
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
	 * @return ItemIDArrayType
	 */
	function getPromotionalSaleItemIDArray()
	{
		return $this->PromotionalSaleItemIDArray;
	}
	/**
	 * @return void
	 * @param ItemIDArrayType $value 
	 */
	function setPromotionalSaleItemIDArray($value)
	{
		$this->PromotionalSaleItemIDArray = $value;
	}
	/**
	 * @return long
	 */
	function getStoreCategoryID()
	{
		return $this->StoreCategoryID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setStoreCategoryID($value)
	{
		$this->StoreCategoryID = $value;
	}
	/**
	 * @return long
	 */
	function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}
	/**
	 * @return boolean
	 */
	function getAllFixedPriceItems()
	{
		return $this->AllFixedPriceItems;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setAllFixedPriceItems($value)
	{
		$this->AllFixedPriceItems = $value;
	}
	/**
	 * @return boolean
	 */
	function getAllStoreInventoryItems()
	{
		return $this->AllStoreInventoryItems;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setAllStoreInventoryItems($value)
	{
		$this->AllStoreInventoryItems = $value;
	}
	/**
	 * @return boolean
	 */
	function getAllAuctionItems()
	{
		return $this->AllAuctionItems;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setAllAuctionItems($value)
	{
		$this->AllAuctionItems = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SetPromotionalSaleListingsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PromotionalSaleID' =>
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
					),
					'PromotionalSaleItemIDArray' =>
					array(
						'required' => false,
						'type' => 'ItemIDArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StoreCategoryID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AllFixedPriceItems' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AllStoreInventoryItems' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AllAuctionItems' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
