<?php
// autogenerated file 10.09.2012 12:44
// $Id: $
// $Log: $
//
//
require_once 'MismatchTypeCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
 * Contains information related to an over or under mismatched payment. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/eBayPaymentMismatchDetailsType.html
 *
 */
class eBayPaymentMismatchDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var MismatchTypeCodeType
	 */
	protected $MismatchType;
	/**
	 * @var dateTime
	 */
	protected $ActionRequiredBy;
	/**
	 * @var AmountType
	 */
	protected $MismatchAmount;

	/**
	 * @return MismatchTypeCodeType
	 */
	function getMismatchType()
	{
		return $this->MismatchType;
	}
	/**
	 * @return void
	 * @param MismatchTypeCodeType $value 
	 */
	function setMismatchType($value)
	{
		$this->MismatchType = $value;
	}
	/**
	 * @return dateTime
	 */
	function getActionRequiredBy()
	{
		return $this->ActionRequiredBy;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setActionRequiredBy($value)
	{
		$this->ActionRequiredBy = $value;
	}
	/**
	 * @return AmountType
	 */
	function getMismatchAmount()
	{
		return $this->MismatchAmount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setMismatchAmount($value)
	{
		$this->MismatchAmount = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('eBayPaymentMismatchDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'MismatchType' =>
					array(
						'required' => false,
						'type' => 'MismatchTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ActionRequiredBy' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MismatchAmount' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
