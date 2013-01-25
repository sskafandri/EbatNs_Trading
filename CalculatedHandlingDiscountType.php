<?php
// autogenerated file 15.11.2010 08:39
// $Id: $
// $Log: $
//
//
require_once 'HandlingNameCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
 * Instructions on packaging/handling costs for combined payment. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CalculatedHandlingDiscountType.html
 *
 */
class CalculatedHandlingDiscountType extends EbatNs_ComplexType
{
	/**
	 * @var HandlingNameCodeType
	 */
	protected $DiscountName;
	/**
	 * @var AmountType
	 */
	protected $OrderHandlingAmount;
	/**
	 * @var AmountType
	 */
	protected $EachAdditionalAmount;
	/**
	 * @var AmountType
	 */
	protected $EachAdditionalOffAmount;
	/**
	 * @var float
	 */
	protected $EachAdditionalPercentOff;

	/**
	 * @return HandlingNameCodeType
	 */
	function getDiscountName()
	{
		return $this->DiscountName;
	}
	/**
	 * @return void
	 * @param HandlingNameCodeType $value 
	 */
	function setDiscountName($value)
	{
		$this->DiscountName = $value;
	}
	/**
	 * @return AmountType
	 */
	function getOrderHandlingAmount()
	{
		return $this->OrderHandlingAmount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setOrderHandlingAmount($value)
	{
		$this->OrderHandlingAmount = $value;
	}
	/**
	 * @return AmountType
	 */
	function getEachAdditionalAmount()
	{
		return $this->EachAdditionalAmount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setEachAdditionalAmount($value)
	{
		$this->EachAdditionalAmount = $value;
	}
	/**
	 * @return AmountType
	 */
	function getEachAdditionalOffAmount()
	{
		return $this->EachAdditionalOffAmount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setEachAdditionalOffAmount($value)
	{
		$this->EachAdditionalOffAmount = $value;
	}
	/**
	 * @return float
	 */
	function getEachAdditionalPercentOff()
	{
		return $this->EachAdditionalPercentOff;
	}
	/**
	 * @return void
	 * @param float $value 
	 */
	function setEachAdditionalPercentOff($value)
	{
		$this->EachAdditionalPercentOff = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CalculatedHandlingDiscountType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DiscountName' =>
					array(
						'required' => false,
						'type' => 'HandlingNameCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'OrderHandlingAmount' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EachAdditionalAmount' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EachAdditionalOffAmount' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EachAdditionalPercentOff' =>
					array(
						'required' => false,
						'type' => 'float',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
