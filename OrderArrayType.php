<?php
// autogenerated file 15.11.2010 08:39
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'OrderType.php';

/**
 * An array of Orders. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/OrderArrayType.html
 *
 */
class OrderArrayType extends EbatNs_ComplexType
{
	/**
	 * @var OrderType
	 */
	protected $Order;

	/**
	 * @return OrderType
	 * @param integer $index 
	 */
	function getOrder($index = null)
	{
		if ($index !== null) {
			return $this->Order[$index];
		} else {
			return $this->Order;
		}
	}
	/**
	 * @return void
	 * @param OrderType $value 
	 * @param  $index 
	 */
	function setOrder($value, $index = null)
	{
		if ($index !== null) {
			$this->Order[$index] = $value;
		} else {
			$this->Order = $value;
		}
	}
	/**
	 * @return void
	 * @param OrderType $value 
	 */
	function addOrder($value)
	{
		$this->Order[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('OrderArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Order' =>
					array(
						'required' => false,
						'type' => 'OrderType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
