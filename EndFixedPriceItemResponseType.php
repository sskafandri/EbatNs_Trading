<?php
// autogenerated file 09.05.2012 13:19
// $Id: $
// $Log: $
//
//
require_once 'SKUType.php';
require_once 'AbstractResponseType.php';

/**
 * Acknowledgement that includes SKU, as well as the date and time the auction 
 * wasended due to the call to EndFixedPriceItem. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/EndFixedPriceItemResponseType.html
 *
 */
class EndFixedPriceItemResponseType extends AbstractResponseType
{
	/**
	 * @var dateTime
	 */
	protected $EndTime;
	/**
	 * @var SKUType
	 */
	protected $SKU;

	/**
	 * @return dateTime
	 */
	function getEndTime()
	{
		return $this->EndTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setEndTime($value)
	{
		$this->EndTime = $value;
	}
	/**
	 * @return SKUType
	 */
	function getSKU()
	{
		return $this->SKU;
	}
	/**
	 * @return void
	 * @param SKUType $value 
	 */
	function setSKU($value)
	{
		$this->SKU = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('EndFixedPriceItemResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'EndTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SKU' =>
					array(
						'required' => false,
						'type' => 'SKUType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
