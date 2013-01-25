<?php
// autogenerated file 22.07.2011 08:57
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'PeriodCodeType.php';

/**
 * Container for Maximum Buyer Policy Violation Reports buyer requirements in 
 * listing calls. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MaximumBuyerPolicyViolationsType.html
 *
 */
class MaximumBuyerPolicyViolationsType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $Count;
	/**
	 * @var PeriodCodeType
	 */
	protected $Period;

	/**
	 * @return int
	 */
	function getCount()
	{
		return $this->Count;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setCount($value)
	{
		$this->Count = $value;
	}
	/**
	 * @return PeriodCodeType
	 */
	function getPeriod()
	{
		return $this->Period;
	}
	/**
	 * @return void
	 * @param PeriodCodeType $value 
	 */
	function setPeriod($value)
	{
		$this->Period = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MaximumBuyerPolicyViolationsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Count' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Period' =>
					array(
						'required' => false,
						'type' => 'PeriodCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
