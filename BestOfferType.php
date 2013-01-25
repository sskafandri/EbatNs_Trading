<?php
// autogenerated file 09.05.2012 13:11
// $Id: $
// $Log: $
//
//
require_once 'BestOfferStatusCodeType.php';
require_once 'AmountType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'UserType.php';
require_once 'BestOfferTypeCodeType.php';
require_once 'BestOfferIDType.php';

/**
 * Details about a best offer. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BestOfferType.html
 *
 */
class BestOfferType extends EbatNs_ComplexType
{
	/**
	 * @var BestOfferIDType
	 */
	protected $BestOfferID;
	/**
	 * @var dateTime
	 */
	protected $ExpirationTime;
	/**
	 * @var UserType
	 */
	protected $Buyer;
	/**
	 * @var AmountType
	 */
	protected $Price;
	/**
	 * @var BestOfferStatusCodeType
	 */
	protected $Status;
	/**
	 * @var int
	 */
	protected $Quantity;
	/**
	 * @var string
	 */
	protected $BuyerMessage;
	/**
	 * @var string
	 */
	protected $SellerMessage;
	/**
	 * @var BestOfferTypeCodeType
	 */
	protected $BestOfferCodeType;
	/**
	 * @var string
	 */
	protected $CallStatus;

	/**
	 * @return BestOfferIDType
	 */
	function getBestOfferID()
	{
		return $this->BestOfferID;
	}
	/**
	 * @return void
	 * @param BestOfferIDType $value 
	 */
	function setBestOfferID($value)
	{
		$this->BestOfferID = $value;
	}
	/**
	 * @return dateTime
	 */
	function getExpirationTime()
	{
		return $this->ExpirationTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setExpirationTime($value)
	{
		$this->ExpirationTime = $value;
	}
	/**
	 * @return UserType
	 */
	function getBuyer()
	{
		return $this->Buyer;
	}
	/**
	 * @return void
	 * @param UserType $value 
	 */
	function setBuyer($value)
	{
		$this->Buyer = $value;
	}
	/**
	 * @return AmountType
	 */
	function getPrice()
	{
		return $this->Price;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setPrice($value)
	{
		$this->Price = $value;
	}
	/**
	 * @return BestOfferStatusCodeType
	 */
	function getStatus()
	{
		return $this->Status;
	}
	/**
	 * @return void
	 * @param BestOfferStatusCodeType $value 
	 */
	function setStatus($value)
	{
		$this->Status = $value;
	}
	/**
	 * @return int
	 */
	function getQuantity()
	{
		return $this->Quantity;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setQuantity($value)
	{
		$this->Quantity = $value;
	}
	/**
	 * @return string
	 */
	function getBuyerMessage()
	{
		return $this->BuyerMessage;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setBuyerMessage($value)
	{
		$this->BuyerMessage = $value;
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
	 * @return BestOfferTypeCodeType
	 */
	function getBestOfferCodeType()
	{
		return $this->BestOfferCodeType;
	}
	/**
	 * @return void
	 * @param BestOfferTypeCodeType $value 
	 */
	function setBestOfferCodeType($value)
	{
		$this->BestOfferCodeType = $value;
	}
	/**
	 * @return string
	 */
	function getCallStatus()
	{
		return $this->CallStatus;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCallStatus($value)
	{
		$this->CallStatus = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BestOfferType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'BestOfferID' =>
					array(
						'required' => false,
						'type' => 'BestOfferIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ExpirationTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Buyer' =>
					array(
						'required' => false,
						'type' => 'UserType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Price' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Status' =>
					array(
						'required' => false,
						'type' => 'BestOfferStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Quantity' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BuyerMessage' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
					),
					'BestOfferCodeType' =>
					array(
						'required' => false,
						'type' => 'BestOfferTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CallStatus' =>
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
