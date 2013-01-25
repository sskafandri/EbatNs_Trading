<?php
// autogenerated file 29.12.2011 14:42
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'InsuranceOptionCodeType.php';
require_once 'AmountType.php';

/**
 * Contains the cost of shipping insurance and other insurance-related information. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/InsuranceDetailsType.html
 *
 */
class InsuranceDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var AmountType
	 */
	protected $InsuranceFee;
	/**
	 * @var InsuranceOptionCodeType
	 */
	protected $InsuranceOption;

	/**
	 * @return AmountType
	 */
	function getInsuranceFee()
	{
		return $this->InsuranceFee;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setInsuranceFee($value)
	{
		$this->InsuranceFee = $value;
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
		parent::__construct('InsuranceDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'InsuranceFee' =>
					array(
						'required' => false,
						'type' => 'AmountType',
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
