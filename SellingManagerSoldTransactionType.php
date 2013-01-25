<?php
// autogenerated file 15.11.2010 08:39
// $Id: $
// $Log: $
//
//
require_once 'ListingTypeCodeType.php';
require_once 'VariationType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'ShipmentType.php';
require_once 'TransactionPlatformCodeType.php';
require_once 'AmountType.php';
require_once 'ItemIDType.php';

/**
 * Contains information about a single transaction. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellingManagerSoldTransactionType.html
 *
 */
class SellingManagerSoldTransactionType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $InvoiceNumber;
	/**
	 * @var long
	 */
	protected $TransactionID;
	/**
	 * @var long
	 */
	protected $SaleRecordID;
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var int
	 */
	protected $QuantitySold;
	/**
	 * @var AmountType
	 */
	protected $ItemPrice;
	/**
	 * @var AmountType
	 */
	protected $SubtotalAmount;
	/**
	 * @var string
	 */
	protected $ItemTitle;
	/**
	 * @var ListingTypeCodeType
	 */
	protected $ListingType;
	/**
	 * @var boolean
	 */
	protected $Relisted;
	/**
	 * @var int
	 */
	protected $WatchCount;
	/**
	 * @var AmountType
	 */
	protected $StartPrice;
	/**
	 * @var AmountType
	 */
	protected $ReservePrice;
	/**
	 * @var boolean
	 */
	protected $SecondChanceOfferSent;
	/**
	 * @var string
	 */
	protected $CustomLabel;
	/**
	 * @var TransactionPlatformCodeType
	 */
	protected $SoldOn;
	/**
	 * @var TransactionPlatformCodeType
	 */
	protected $ListedOn;
	/**
	 * @var ShipmentType
	 */
	protected $Shipment;
	/**
	 * @var boolean
	 */
	protected $CharityListing;
	/**
	 * @var VariationType
	 */
	protected $Variation;
	/**
	 * @var string
	 */
	protected $OrderLineItemID;

	/**
	 * @return string
	 */
	function getInvoiceNumber()
	{
		return $this->InvoiceNumber;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setInvoiceNumber($value)
	{
		$this->InvoiceNumber = $value;
	}
	/**
	 * @return long
	 */
	function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setTransactionID($value)
	{
		$this->TransactionID = $value;
	}
	/**
	 * @return long
	 */
	function getSaleRecordID()
	{
		return $this->SaleRecordID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setSaleRecordID($value)
	{
		$this->SaleRecordID = $value;
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
	 * @return int
	 */
	function getQuantitySold()
	{
		return $this->QuantitySold;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setQuantitySold($value)
	{
		$this->QuantitySold = $value;
	}
	/**
	 * @return AmountType
	 */
	function getItemPrice()
	{
		return $this->ItemPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setItemPrice($value)
	{
		$this->ItemPrice = $value;
	}
	/**
	 * @return AmountType
	 */
	function getSubtotalAmount()
	{
		return $this->SubtotalAmount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setSubtotalAmount($value)
	{
		$this->SubtotalAmount = $value;
	}
	/**
	 * @return string
	 */
	function getItemTitle()
	{
		return $this->ItemTitle;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setItemTitle($value)
	{
		$this->ItemTitle = $value;
	}
	/**
	 * @return ListingTypeCodeType
	 */
	function getListingType()
	{
		return $this->ListingType;
	}
	/**
	 * @return void
	 * @param ListingTypeCodeType $value 
	 */
	function setListingType($value)
	{
		$this->ListingType = $value;
	}
	/**
	 * @return boolean
	 */
	function getRelisted()
	{
		return $this->Relisted;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setRelisted($value)
	{
		$this->Relisted = $value;
	}
	/**
	 * @return int
	 */
	function getWatchCount()
	{
		return $this->WatchCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setWatchCount($value)
	{
		$this->WatchCount = $value;
	}
	/**
	 * @return AmountType
	 */
	function getStartPrice()
	{
		return $this->StartPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setStartPrice($value)
	{
		$this->StartPrice = $value;
	}
	/**
	 * @return AmountType
	 */
	function getReservePrice()
	{
		return $this->ReservePrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setReservePrice($value)
	{
		$this->ReservePrice = $value;
	}
	/**
	 * @return boolean
	 */
	function getSecondChanceOfferSent()
	{
		return $this->SecondChanceOfferSent;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setSecondChanceOfferSent($value)
	{
		$this->SecondChanceOfferSent = $value;
	}
	/**
	 * @return string
	 */
	function getCustomLabel()
	{
		return $this->CustomLabel;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCustomLabel($value)
	{
		$this->CustomLabel = $value;
	}
	/**
	 * @return TransactionPlatformCodeType
	 */
	function getSoldOn()
	{
		return $this->SoldOn;
	}
	/**
	 * @return void
	 * @param TransactionPlatformCodeType $value 
	 */
	function setSoldOn($value)
	{
		$this->SoldOn = $value;
	}
	/**
	 * @return TransactionPlatformCodeType
	 * @param integer $index 
	 */
	function getListedOn($index = null)
	{
		if ($index !== null) {
			return $this->ListedOn[$index];
		} else {
			return $this->ListedOn;
		}
	}
	/**
	 * @return void
	 * @param TransactionPlatformCodeType $value 
	 * @param  $index 
	 */
	function setListedOn($value, $index = null)
	{
		if ($index !== null) {
			$this->ListedOn[$index] = $value;
		} else {
			$this->ListedOn = $value;
		}
	}
	/**
	 * @return void
	 * @param TransactionPlatformCodeType $value 
	 */
	function addListedOn($value)
	{
		$this->ListedOn[] = $value;
	}
	/**
	 * @return ShipmentType
	 */
	function getShipment()
	{
		return $this->Shipment;
	}
	/**
	 * @return void
	 * @param ShipmentType $value 
	 */
	function setShipment($value)
	{
		$this->Shipment = $value;
	}
	/**
	 * @return boolean
	 */
	function getCharityListing()
	{
		return $this->CharityListing;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setCharityListing($value)
	{
		$this->CharityListing = $value;
	}
	/**
	 * @return VariationType
	 */
	function getVariation()
	{
		return $this->Variation;
	}
	/**
	 * @return void
	 * @param VariationType $value 
	 */
	function setVariation($value)
	{
		$this->Variation = $value;
	}
	/**
	 * @return string
	 */
	function getOrderLineItemID()
	{
		return $this->OrderLineItemID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setOrderLineItemID($value)
	{
		$this->OrderLineItemID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellingManagerSoldTransactionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'InvoiceNumber' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TransactionID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SaleRecordID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
					'QuantitySold' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SubtotalAmount' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemTitle' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ListingType' =>
					array(
						'required' => false,
						'type' => 'ListingTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Relisted' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'WatchCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StartPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReservePrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SecondChanceOfferSent' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CustomLabel' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SoldOn' =>
					array(
						'required' => false,
						'type' => 'TransactionPlatformCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ListedOn' =>
					array(
						'required' => false,
						'type' => 'TransactionPlatformCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'Shipment' =>
					array(
						'required' => false,
						'type' => 'ShipmentType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CharityListing' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Variation' =>
					array(
						'required' => false,
						'type' => 'VariationType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'OrderLineItemID' =>
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
