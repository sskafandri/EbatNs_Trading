<?php
// autogenerated file 09.05.2012 13:15
// $Id: $
// $Log: $
//
//
require_once 'FlatRateInsuranceRangeCostType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'InsuranceOptionCodeType.php';
require_once 'AmountType.php';
require_once 'FlatShippingRateOptionCodeType.php';

/**
 * This type contains Flat Rate Shipping rules and preferences for the seller. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FlatShippingPreferencesType.html
 *
 */
class FlatShippingPreferencesType extends EbatNs_ComplexType
{
	/**
	 * @var AmountType
	 */
	protected $AmountPerAdditionalItem;
	/**
	 * @var AmountType
	 */
	protected $DeductionAmountPerAdditionalItem;
	/**
	 * @var FlatRateInsuranceRangeCostType
	 */
	protected $FlatRateInsuranceRangeCost;
	/**
	 * @var FlatShippingRateOptionCodeType
	 */
	protected $FlatShippingRateOption;
	/**
	 * @var InsuranceOptionCodeType
	 */
	protected $InsuranceOption;

	/**
	 * @return AmountType
	 */
	function getAmountPerAdditionalItem()
	{
		return $this->AmountPerAdditionalItem;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setAmountPerAdditionalItem($value)
	{
		$this->AmountPerAdditionalItem = $value;
	}
	/**
	 * @return AmountType
	 */
	function getDeductionAmountPerAdditionalItem()
	{
		return $this->DeductionAmountPerAdditionalItem;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setDeductionAmountPerAdditionalItem($value)
	{
		$this->DeductionAmountPerAdditionalItem = $value;
	}
	/**
	 * @return FlatRateInsuranceRangeCostType
	 * @param integer $index 
	 */
	function getFlatRateInsuranceRangeCost($index = null)
	{
		if ($index !== null) {
			return $this->FlatRateInsuranceRangeCost[$index];
		} else {
			return $this->FlatRateInsuranceRangeCost;
		}
	}
	/**
	 * @return void
	 * @param FlatRateInsuranceRangeCostType $value 
	 * @param  $index 
	 */
	function setFlatRateInsuranceRangeCost($value, $index = null)
	{
		if ($index !== null) {
			$this->FlatRateInsuranceRangeCost[$index] = $value;
		} else {
			$this->FlatRateInsuranceRangeCost = $value;
		}
	}
	/**
	 * @return void
	 * @param FlatRateInsuranceRangeCostType $value 
	 */
	function addFlatRateInsuranceRangeCost($value)
	{
		$this->FlatRateInsuranceRangeCost[] = $value;
	}
	/**
	 * @return FlatShippingRateOptionCodeType
	 */
	function getFlatShippingRateOption()
	{
		return $this->FlatShippingRateOption;
	}
	/**
	 * @return void
	 * @param FlatShippingRateOptionCodeType $value 
	 */
	function setFlatShippingRateOption($value)
	{
		$this->FlatShippingRateOption = $value;
	}
	/**
	 * @return InsuranceOptionCodeType
	 */
	function getInsuranceOption()
	{
		return $this->InsuranceOption;
	}
	/**
	 * @return void
	 * @param InsuranceOptionCodeType $value 
	 */
	function setInsuranceOption($value)
	{
		$this->InsuranceOption = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FlatShippingPreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'AmountPerAdditionalItem' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DeductionAmountPerAdditionalItem' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FlatRateInsuranceRangeCost' =>
					array(
						'required' => false,
						'type' => 'FlatRateInsuranceRangeCostType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..6'
					),
					'FlatShippingRateOption' =>
					array(
						'required' => false,
						'type' => 'FlatShippingRateOptionCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InsuranceOption' =>
					array(
						'required' => false,
						'type' => 'InsuranceOptionCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
