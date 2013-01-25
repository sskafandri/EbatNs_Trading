<?php
// autogenerated file 09.05.2012 13:15
// $Id: $
// $Log: $
//
//
require_once 'TransactionType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'OrderType.php';

/**
 * Contains an order or a transaction. A transaction is the sale of one ormore 
 * items from a seller's listing to a buyer. An order combines two or more 
 * transactionsinto a single payment. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/OrderTransactionType.html
 *
 */
class OrderTransactionType extends EbatNs_ComplexType
{
	/**
	 * @var OrderType
	 */
	protected $Order;
	/**
	 * @var TransactionType
	 */
	protected $Transaction;

	/**
	 * @return OrderType
	 */
	function getOrder()
	{
		return $this->Order;
	}
	/**
	 * @return void
	 * @param OrderType $value 
	 */
	function setOrder($value)
	{
		$this->Order = $value;
	}
	/**
	 * @return TransactionType
	 */
	function getTransaction()
	{
		return $this->Transaction;
	}
	/**
	 * @return void
	 * @param TransactionType $value 
	 */
	function setTransaction($value)
	{
		$this->Transaction = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('OrderTransactionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Order' =>
					array(
						'required' => false,
						'type' => 'OrderType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Transaction' =>
					array(
						'required' => false,
						'type' => 'TransactionType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
