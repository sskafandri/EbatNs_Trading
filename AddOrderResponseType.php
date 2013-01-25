<?php
// autogenerated file 09.05.2012 12:52
// $Id: $
// $Log: $
//
//
require_once 'OrderIDType.php';
require_once 'AbstractResponseType.php';

/**
 * Returns a unique identifier for the order. A buyer may make a singlepayment to 
 * purchase all of the order line items includedin the order. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddOrderResponseType.html
 *
 */
class AddOrderResponseType extends AbstractResponseType
{
	/**
	 * @var OrderIDType
	 */
	protected $OrderID;
	/**
	 * @var dateTime
	 */
	protected $CreatedTime;

	/**
	 * @return OrderIDType
	 */
	function getOrderID()
	{
		return $this->OrderID;
	}
	/**
	 * @return void
	 * @param OrderIDType $value 
	 */
	function setOrderID($value)
	{
		$this->OrderID = $value;
	}
	/**
	 * @return dateTime
	 */
	function getCreatedTime()
	{
		return $this->CreatedTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setCreatedTime($value)
	{
		$this->CreatedTime = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AddOrderResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'OrderID' =>
					array(
						'required' => false,
						'type' => 'OrderIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CreatedTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
