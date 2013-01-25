<?php
// autogenerated file 10.09.2012 12:44
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'OrderArrayType.php';

/**
 * Response to GetOrderTransactions request. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetOrderTransactionsResponseType.html
 *
 */
class GetOrderTransactionsResponseType extends AbstractResponseType
{
	/**
	 * @var OrderArrayType
	 */
	protected $OrderArray;

	/**
	 * @return OrderArrayType
	 */
	function getOrderArray()
	{
		return $this->OrderArray;
	}
	/**
	 * @return void
	 * @param OrderArrayType $value 
	 */
	function setOrderArray($value)
	{
		$this->OrderArray = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetOrderTransactionsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'OrderArray' =>
					array(
						'required' => false,
						'type' => 'OrderArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
