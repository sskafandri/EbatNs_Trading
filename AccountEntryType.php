<?php
// autogenerated file 09.05.2012 12:52
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'AccountDetailEntryCodeType.php';
require_once 'AmountType.php';
require_once 'ItemIDType.php';

/**
 * Contains the data for a single account detail entry. Each detail entry is 
 * atransaction posted to the account and may be: a credit, a debit, or 
 * anadministrative action (such as an update putting a credit card on file forthe 
 * account). You can uniquely identifythe entries that the <b>GetAccount</b> call 
 * returns within the <b>AccountEntries</b> tag.Specifically, the following fields, 
 * returned within the <b>AccountEntries</b> tag,can be used in combination as a 
 * unique key: AccountEntry.Date, 
 * AccountEntry.AccountDetailsEntryType,AccountEntry.ItemID, and 
 * AccountEntry.RefNumber. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AccountEntryType.html
 *
 */
class AccountEntryType extends EbatNs_ComplexType
{
	/**
	 * @var AccountDetailEntryCodeType
	 */
	protected $AccountDetailsEntryType;
	/**
	 * @var string
	 */
	protected $Description;
	/**
	 * @var AmountType
	 */
	protected $Balance;
	/**
	 * @var dateTime
	 */
	protected $Date;
	/**
	 * @var AmountType
	 */
	protected $GrossDetailAmount;
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var string
	 */
	protected $Memo;
	/**
	 * @var AmountType
	 */
	protected $ConversionRate;
	/**
	 * @var AmountType
	 */
	protected $NetDetailAmount;
	/**
	 * @var string
	 */
	protected $RefNumber;
	/**
	 * @var decimal
	 */
	protected $VATPercent;
	/**
	 * @var string
	 */
	protected $Title;
	/**
	 * @var string
	 */
	protected $OrderLineItemID;
	/**
	 * @var string
	 */
	protected $TransactionID;

	/**
	 * @return AccountDetailEntryCodeType
	 */
	function getAccountDetailsEntryType()
	{
		return $this->AccountDetailsEntryType;
	}
	/**
	 * @return void
	 * @param AccountDetailEntryCodeType $value 
	 */
	function setAccountDetailsEntryType($value)
	{
		$this->AccountDetailsEntryType = $value;
	}
	/**
	 * @return string
	 */
	function getDescription()
	{
		return $this->Description;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDescription($value)
	{
		$this->Description = $value;
	}
	/**
	 * @return AmountType
	 */
	function getBalance()
	{
		return $this->Balance;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setBalance($value)
	{
		$this->Balance = $value;
	}
	/**
	 * @return dateTime
	 */
	function getDate()
	{
		return $this->Date;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setDate($value)
	{
		$this->Date = $value;
	}
	/**
	 * @return AmountType
	 */
	function getGrossDetailAmount()
	{
		return $this->GrossDetailAmount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setGrossDetailAmount($value)
	{
		$this->GrossDetailAmount = $value;
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
	function getMemo()
	{
		return $this->Memo;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMemo($value)
	{
		$this->Memo = $value;
	}
	/**
	 * @return AmountType
	 */
	function getConversionRate()
	{
		return $this->ConversionRate;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setConversionRate($value)
	{
		$this->ConversionRate = $value;
	}
	/**
	 * @return AmountType
	 */
	function getNetDetailAmount()
	{
		return $this->NetDetailAmount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setNetDetailAmount($value)
	{
		$this->NetDetailAmount = $value;
	}
	/**
	 * @return string
	 */
	function getRefNumber()
	{
		return $this->RefNumber;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setRefNumber($value)
	{
		$this->RefNumber = $value;
	}
	/**
	 * @return decimal
	 */
	function getVATPercent()
	{
		return $this->VATPercent;
	}
	/**
	 * @return void
	 * @param decimal $value 
	 */
	function setVATPercent($value)
	{
		$this->VATPercent = $value;
	}
	/**
	 * @return string
	 */
	function getTitle()
	{
		return $this->Title;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTitle($value)
	{
		$this->Title = $value;
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
	 * @return string
	 */
	function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTransactionID($value)
	{
		$this->TransactionID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AccountEntryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'AccountDetailsEntryType' =>
					array(
						'required' => false,
						'type' => 'AccountDetailEntryCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Description' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Balance' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Date' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'GrossDetailAmount' =>
					array(
						'required' => false,
						'type' => 'AmountType',
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
					'Memo' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ConversionRate' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'NetDetailAmount' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RefNumber' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'VATPercent' =>
					array(
						'required' => false,
						'type' => 'decimal',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Title' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
					),
					'TransactionID' =>
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
