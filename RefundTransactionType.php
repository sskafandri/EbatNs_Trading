<?php
// autogenerated file 10.09.2012 12:49
// $Id: $
// $Log: $
//
//
require_once 'RefundLineArrayType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * A container consisting of details about the order line item against which the 
 * sellerissued a refund. If an order ID is present, it indicates that the refund 
 * was issuedagainst the entire order. If an item ID and transaction ID are 
 * present, that indicatesthat the refund was issued against that particular order 
 * line item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RefundTransactionType.html
 *
 */
class RefundTransactionType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $OrderID;
	/**
	 * @var string
	 */
	protected $ItemID;
	/**
	 * @var string
	 */
	protected $TransactionID;
	/**
	 * @var RefundLineArrayType
	 */
	protected $RefundLineArray;

	/**
	 * @return string
	 */
	function getOrderID()
	{
		return $this->OrderID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setOrderID($value)
	{
		$this->OrderID = $value;
	}
	/**
	 * @return string
	 */
	function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setItemID($value)
	{
		$this->ItemID = $value;
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
	 * @return RefundLineArrayType
	 */
	function getRefundLineArray()
	{
		return $this->RefundLineArray;
	}
	/**
	 * @return void
	 * @param RefundLineArrayType $value 
	 */
	function setRefundLineArray($value)
	{
		$this->RefundLineArray = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RefundTransactionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'OrderID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemID' =>
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
					),
					'RefundLineArray' =>
					array(
						'required' => false,
						'type' => 'RefundLineArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
