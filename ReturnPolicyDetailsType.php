<?php
// autogenerated file 09.05.2012 13:11
// $Id: $
// $Log: $
//
//
require_once 'WarrantyTypeDetailsType.php';
require_once 'ReturnsWithinDetailsType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'WarrantyOfferedDetailsType.php';
require_once 'WarrantyDurationDetailsType.php';
require_once 'RefundDetailsType.php';
require_once 'ShippingCostPaidByDetailsType.php';
require_once 'ReturnsAcceptedDetailsType.php';

/**
 * Type for the return policy details of an item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ReturnPolicyDetailsType.html
 *
 */
class ReturnPolicyDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var RefundDetailsType
	 */
	protected $Refund;
	/**
	 * @var ReturnsWithinDetailsType
	 */
	protected $ReturnsWithin;
	/**
	 * @var ReturnsAcceptedDetailsType
	 */
	protected $ReturnsAccepted;
	/**
	 * @var boolean
	 */
	protected $Description;
	/**
	 * @var WarrantyOfferedDetailsType
	 */
	protected $WarrantyOffered;
	/**
	 * @var WarrantyTypeDetailsType
	 */
	protected $WarrantyType;
	/**
	 * @var WarrantyDurationDetailsType
	 */
	protected $WarrantyDuration;
	/**
	 * @var boolean
	 */
	protected $EAN;
	/**
	 * @var ShippingCostPaidByDetailsType
	 */
	protected $ShippingCostPaidBy;
	/**
	 * @var string
	 */
	protected $DetailVersion;
	/**
	 * @var dateTime
	 */
	protected $UpdateTime;

	/**
	 * @return RefundDetailsType
	 * @param integer $index 
	 */
	function getRefund($index = null)
	{
		if ($index !== null) {
			return $this->Refund[$index];
		} else {
			return $this->Refund;
		}
	}
	/**
	 * @return void
	 * @param RefundDetailsType $value 
	 * @param  $index 
	 */
	function setRefund($value, $index = null)
	{
		if ($index !== null) {
			$this->Refund[$index] = $value;
		} else {
			$this->Refund = $value;
		}
	}
	/**
	 * @return void
	 * @param RefundDetailsType $value 
	 */
	function addRefund($value)
	{
		$this->Refund[] = $value;
	}
	/**
	 * @return ReturnsWithinDetailsType
	 * @param integer $index 
	 */
	function getReturnsWithin($index = null)
	{
		if ($index !== null) {
			return $this->ReturnsWithin[$index];
		} else {
			return $this->ReturnsWithin;
		}
	}
	/**
	 * @return void
	 * @param ReturnsWithinDetailsType $value 
	 * @param  $index 
	 */
	function setReturnsWithin($value, $index = null)
	{
		if ($index !== null) {
			$this->ReturnsWithin[$index] = $value;
		} else {
			$this->ReturnsWithin = $value;
		}
	}
	/**
	 * @return void
	 * @param ReturnsWithinDetailsType $value 
	 */
	function addReturnsWithin($value)
	{
		$this->ReturnsWithin[] = $value;
	}
	/**
	 * @return ReturnsAcceptedDetailsType
	 * @param integer $index 
	 */
	function getReturnsAccepted($index = null)
	{
		if ($index !== null) {
			return $this->ReturnsAccepted[$index];
		} else {
			return $this->ReturnsAccepted;
		}
	}
	/**
	 * @return void
	 * @param ReturnsAcceptedDetailsType $value 
	 * @param  $index 
	 */
	function setReturnsAccepted($value, $index = null)
	{
		if ($index !== null) {
			$this->ReturnsAccepted[$index] = $value;
		} else {
			$this->ReturnsAccepted = $value;
		}
	}
	/**
	 * @return void
	 * @param ReturnsAcceptedDetailsType $value 
	 */
	function addReturnsAccepted($value)
	{
		$this->ReturnsAccepted[] = $value;
	}
	/**
	 * @return boolean
	 */
	function getDescription()
	{
		return $this->Description;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDescription($value)
	{
		$this->Description = $value;
	}
	/**
	 * @return WarrantyOfferedDetailsType
	 * @param integer $index 
	 */
	function getWarrantyOffered($index = null)
	{
		if ($index !== null) {
			return $this->WarrantyOffered[$index];
		} else {
			return $this->WarrantyOffered;
		}
	}
	/**
	 * @return void
	 * @param WarrantyOfferedDetailsType $value 
	 * @param  $index 
	 */
	function setWarrantyOffered($value, $index = null)
	{
		if ($index !== null) {
			$this->WarrantyOffered[$index] = $value;
		} else {
			$this->WarrantyOffered = $value;
		}
	}
	/**
	 * @return void
	 * @param WarrantyOfferedDetailsType $value 
	 */
	function addWarrantyOffered($value)
	{
		$this->WarrantyOffered[] = $value;
	}
	/**
	 * @return WarrantyTypeDetailsType
	 * @param integer $index 
	 */
	function getWarrantyType($index = null)
	{
		if ($index !== null) {
			return $this->WarrantyType[$index];
		} else {
			return $this->WarrantyType;
		}
	}
	/**
	 * @return void
	 * @param WarrantyTypeDetailsType $value 
	 * @param  $index 
	 */
	function setWarrantyType($value, $index = null)
	{
		if ($index !== null) {
			$this->WarrantyType[$index] = $value;
		} else {
			$this->WarrantyType = $value;
		}
	}
	/**
	 * @return void
	 * @param WarrantyTypeDetailsType $value 
	 */
	function addWarrantyType($value)
	{
		$this->WarrantyType[] = $value;
	}
	/**
	 * @return WarrantyDurationDetailsType
	 * @param integer $index 
	 */
	function getWarrantyDuration($index = null)
	{
		if ($index !== null) {
			return $this->WarrantyDuration[$index];
		} else {
			return $this->WarrantyDuration;
		}
	}
	/**
	 * @return void
	 * @param WarrantyDurationDetailsType $value 
	 * @param  $index 
	 */
	function setWarrantyDuration($value, $index = null)
	{
		if ($index !== null) {
			$this->WarrantyDuration[$index] = $value;
		} else {
			$this->WarrantyDuration = $value;
		}
	}
	/**
	 * @return void
	 * @param WarrantyDurationDetailsType $value 
	 */
	function addWarrantyDuration($value)
	{
		$this->WarrantyDuration[] = $value;
	}
	/**
	 * @return boolean
	 */
	function getEAN()
	{
		return $this->EAN;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setEAN($value)
	{
		$this->EAN = $value;
	}
	/**
	 * @return ShippingCostPaidByDetailsType
	 * @param integer $index 
	 */
	function getShippingCostPaidBy($index = null)
	{
		if ($index !== null) {
			return $this->ShippingCostPaidBy[$index];
		} else {
			return $this->ShippingCostPaidBy;
		}
	}
	/**
	 * @return void
	 * @param ShippingCostPaidByDetailsType $value 
	 * @param  $index 
	 */
	function setShippingCostPaidBy($value, $index = null)
	{
		if ($index !== null) {
			$this->ShippingCostPaidBy[$index] = $value;
		} else {
			$this->ShippingCostPaidBy = $value;
		}
	}
	/**
	 * @return void
	 * @param ShippingCostPaidByDetailsType $value 
	 */
	function addShippingCostPaidBy($value)
	{
		$this->ShippingCostPaidBy[] = $value;
	}
	/**
	 * @return string
	 */
	function getDetailVersion()
	{
		return $this->DetailVersion;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDetailVersion($value)
	{
		$this->DetailVersion = $value;
	}
	/**
	 * @return dateTime
	 */
	function getUpdateTime()
	{
		return $this->UpdateTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setUpdateTime($value)
	{
		$this->UpdateTime = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ReturnPolicyDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Refund' =>
					array(
						'required' => false,
						'type' => 'RefundDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'ReturnsWithin' =>
					array(
						'required' => false,
						'type' => 'ReturnsWithinDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'ReturnsAccepted' =>
					array(
						'required' => false,
						'type' => 'ReturnsAcceptedDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'Description' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'WarrantyOffered' =>
					array(
						'required' => false,
						'type' => 'WarrantyOfferedDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'WarrantyType' =>
					array(
						'required' => false,
						'type' => 'WarrantyTypeDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'WarrantyDuration' =>
					array(
						'required' => false,
						'type' => 'WarrantyDurationDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'EAN' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingCostPaidBy' =>
					array(
						'required' => false,
						'type' => 'ShippingCostPaidByDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'DetailVersion' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UpdateTime' =>
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
