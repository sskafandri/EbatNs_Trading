<?php
// autogenerated file 29.12.2011 14:42
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'OrderIDType.php';

/**
 * A list of unique identifiers for orders. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/OrderIDArrayType.html
 *
 */
class OrderIDArrayType extends EbatNs_ComplexType
{
	/**
	 * @var OrderIDType
	 */
	protected $OrderID;

	/**
	 * @return OrderIDType
	 * @param integer $index 
	 */
	function getOrderID($index = null)
	{
		if ($index !== null) {
			return $this->OrderID[$index];
		} else {
			return $this->OrderID;
		}
	}
	/**
	 * @return void
	 * @param OrderIDType $value 
	 * @param  $index 
	 */
	function setOrderID($value, $index = null)
	{
		if ($index !== null) {
			$this->OrderID[$index] = $value;
		} else {
			$this->OrderID = $value;
		}
	}
	/**
	 * @return void
	 * @param OrderIDType $value 
	 */
	function addOrderID($value)
	{
		$this->OrderID[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('OrderIDArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'OrderID' =>
					array(
						'required' => false,
						'type' => 'OrderIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
