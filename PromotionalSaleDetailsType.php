<?php
// autogenerated file 09.05.2012 13:04
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
 * If a seller has reduced the price of a listed item with the Promotional Price 
 * Displayfeature, this type contains the original price of the discounted item and 
 * otherinformation. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PromotionalSaleDetailsType.html
 *
 */
class PromotionalSaleDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var AmountType
	 */
	protected $OriginalPrice;
	/**
	 * @var dateTime
	 */
	protected $StartTime;
	/**
	 * @var dateTime
	 */
	protected $EndTime;

	/**
	 * @return AmountType
	 */
	function getOriginalPrice()
	{
		return $this->OriginalPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setOriginalPrice($value)
	{
		$this->OriginalPrice = $value;
	}
	/**
	 * @return dateTime
	 */
	function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setStartTime($value)
	{
		$this->StartTime = $value;
	}
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
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PromotionalSaleDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'OriginalPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StartTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EndTime' =>
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
