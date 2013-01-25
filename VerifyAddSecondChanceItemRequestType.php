<?php
// autogenerated file 09.05.2012 13:19
// $Id: $
// $Log: $
//
//
require_once 'UserIDType.php';
require_once 'SecondChanceOfferDurationCodeType.php';
require_once 'AmountType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Simulates the creation of a new Second Chance Offerlisting of an item without 
 * actually creating a listing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/VerifyAddSecondChanceItemRequestType.html
 *
 */
class VerifyAddSecondChanceItemRequestType extends AbstractRequestType
{
	/**
	 * @var UserIDType
	 */
	protected $RecipientBidderUserID;
	/**
	 * @var AmountType
	 */
	protected $BuyItNowPrice;
	/**
	 * @var SecondChanceOfferDurationCodeType
	 */
	protected $Duration;
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var string
	 */
	protected $SellerMessage;

	/**
	 * @return UserIDType
	 */
	function getRecipientBidderUserID()
	{
		return $this->RecipientBidderUserID;
	}
	/**
	 * @return void
	 * @param UserIDType $value 
	 */
	function setRecipientBidderUserID($value)
	{
		$this->RecipientBidderUserID = $value;
	}
	/**
	 * @return AmountType
	 */
	function getBuyItNowPrice()
	{
		return $this->BuyItNowPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setBuyItNowPrice($value)
	{
		$this->BuyItNowPrice = $value;
	}
	/**
	 * @return SecondChanceOfferDurationCodeType
	 */
	function getDuration()
	{
		return $this->Duration;
	}
	/**
	 * @return void
	 * @param SecondChanceOfferDurationCodeType $value 
	 */
	function setDuration($value)
	{
		$this->Duration = $value;
	}
	/**
	 * @return ItemIDType
	 */
	function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
	/**
	 * @return string
	 */
	function getSellerMessage()
	{
		return $this->SellerMessage;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSellerMessage($value)
	{
		$this->SellerMessage = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('VerifyAddSecondChanceItemRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'RecipientBidderUserID' =>
					array(
						'required' => false,
						'type' => 'UserIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BuyItNowPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Duration' =>
					array(
						'required' => false,
						'type' => 'SecondChanceOfferDurationCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerMessage' =>
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
