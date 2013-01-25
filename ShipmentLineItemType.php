<?php
// autogenerated file 10.09.2012 12:41
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'LineItemType.php';

/**
 * This type provides information about one or more order line items in a Global 
 * Shipping Program package. <br/><br/><span 
 * class="tablenote"><strong>Note:</strong> The Global Shipping Program is 
 * available for testing with simulated responses in the Sandbox in early July 
 * 2012. The full functionality of the Global Shipping Program will be available in 
 * August 2012.</span> 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ShipmentLineItemType.html
 *
 */
class ShipmentLineItemType extends EbatNs_ComplexType
{
	/**
	 * @var LineItemType
	 */
	protected $LineItem;

	/**
	 * @return LineItemType
	 * @param integer $index 
	 */
	function getLineItem($index = null)
	{
		if ($index !== null) {
			return $this->LineItem[$index];
		} else {
			return $this->LineItem;
		}
	}
	/**
	 * @return void
	 * @param LineItemType $value 
	 * @param  $index 
	 */
	function setLineItem($value, $index = null)
	{
		if ($index !== null) {
			$this->LineItem[$index] = $value;
		} else {
			$this->LineItem = $value;
		}
	}
	/**
	 * @return void
	 * @param LineItemType $value 
	 */
	function addLineItem($value)
	{
		$this->LineItem[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ShipmentLineItemType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'LineItem' =>
					array(
						'required' => true,
						'type' => 'LineItemType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '1..*'
					)
				));
	}
}
?>
