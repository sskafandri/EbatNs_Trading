<?php
// autogenerated file 09.05.2012 13:08
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
 * Container consisting of shipping costs and other details related to a 
 * domesticshipping service. An exception to the domestic shipping service rule is 
 * seen in theShippingServiceSelected container returned under the Order and 
 * Transactioncontainers in order and order line item retrieval calls such as 
 * GetOrders orGetItemTransactions. In this scenario, the SelectedShippingService 
 * containerconsists of either domestic or international shipping service data, 
 * based on theselected service according to the buyer's shipping 
 * address.<br><br>If one or more international shipping services are provided, 
 * theseller must specify at least one domestic shipping service as well. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ShippingServiceOptionsType.html
 *
 */
class ShippingServiceOptionsType extends EbatNs_ComplexType
{
	/**
	 * @var AmountType
	 */
	protected $ShippingInsuranceCost;
	/**
	 * @var token
	 */
	protected $ShippingService;
	/**
	 * @var AmountType
	 */
	protected $ShippingServiceCost;
	/**
	 * @var AmountType
	 */
	protected $ShippingServiceAdditionalCost;
	/**
	 * @var int
	 */
	protected $ShippingServicePriority;
	/**
	 * @var boolean
	 */
	protected $ExpeditedService;
	/**
	 * @var int
	 */
	protected $ShippingTimeMin;
	/**
	 * @var int
	 */
	protected $ShippingTimeMax;
	/**
	 * @var AmountType
	 */
	protected $ShippingSurcharge;
	/**
	 * @var boolean
	 */
	protected $FreeShipping;
	/**
	 * @var boolean
	 */
	protected $LocalPickup;

	/**
	 * @return AmountType
	 */
	function getShippingInsuranceCost()
	{
		return $this->ShippingInsuranceCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setShippingInsuranceCost($value)
	{
		$this->ShippingInsuranceCost = $value;
	}
	/**
	 * @return token
	 */
	function getShippingService()
	{
		return $this->ShippingService;
	}
	/**
	 * @return void
	 * @param token $value 
	 */
	function setShippingService($value)
	{
		$this->ShippingService = $value;
	}
	/**
	 * @return AmountType
	 */
	function getShippingServiceCost()
	{
		return $this->ShippingServiceCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setShippingServiceCost($value)
	{
		$this->ShippingServiceCost = $value;
	}
	/**
	 * @return AmountType
	 */
	function getShippingServiceAdditionalCost()
	{
		return $this->ShippingServiceAdditionalCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setShippingServiceAdditionalCost($value)
	{
		$this->ShippingServiceAdditionalCost = $value;
	}
	/**
	 * @return int
	 */
	function getShippingServicePriority()
	{
		return $this->ShippingServicePriority;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setShippingServicePriority($value)
	{
		$this->ShippingServicePriority = $value;
	}
	/**
	 * @return boolean
	 */
	function getExpeditedService()
	{
		return $this->ExpeditedService;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setExpeditedService($value)
	{
		$this->ExpeditedService = $value;
	}
	/**
	 * @return int
	 */
	function getShippingTimeMin()
	{
		return $this->ShippingTimeMin;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setShippingTimeMin($value)
	{
		$this->ShippingTimeMin = $value;
	}
	/**
	 * @return int
	 */
	function getShippingTimeMax()
	{
		return $this->ShippingTimeMax;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setShippingTimeMax($value)
	{
		$this->ShippingTimeMax = $value;
	}
	/**
	 * @return AmountType
	 */
	function getShippingSurcharge()
	{
		return $this->ShippingSurcharge;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setShippingSurcharge($value)
	{
		$this->ShippingSurcharge = $value;
	}
	/**
	 * @return boolean
	 */
	function getFreeShipping()
	{
		return $this->FreeShipping;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setFreeShipping($value)
	{
		$this->FreeShipping = $value;
	}
	/**
	 * @return boolean
	 */
	function getLocalPickup()
	{
		return $this->LocalPickup;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setLocalPickup($value)
	{
		$this->LocalPickup = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ShippingServiceOptionsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ShippingInsuranceCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingService' =>
					array(
						'required' => false,
						'type' => 'token',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingServiceCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingServiceAdditionalCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingServicePriority' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ExpeditedService' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingTimeMin' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingTimeMax' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingSurcharge' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FreeShipping' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'LocalPickup' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
