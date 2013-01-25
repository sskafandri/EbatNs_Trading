<?php
// autogenerated file 09.05.2012 13:15
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Tax-related details for a region or jurisdiction. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/TaxJurisdictionType.html
 *
 */
class TaxJurisdictionType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $JurisdictionID;
	/**
	 * @var float
	 */
	protected $SalesTaxPercent;
	/**
	 * @var boolean
	 */
	protected $ShippingIncludedInTax;
	/**
	 * @var string
	 */
	protected $JurisdictionName;
	/**
	 * @var string
	 */
	protected $DetailVersion;
	/**
	 * @var dateTime
	 */
	protected $UpdateTime;

	/**
	 * @return string
	 */
	function getJurisdictionID()
	{
		return $this->JurisdictionID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setJurisdictionID($value)
	{
		$this->JurisdictionID = $value;
	}
	/**
	 * @return float
	 */
	function getSalesTaxPercent()
	{
		return $this->SalesTaxPercent;
	}
	/**
	 * @return void
	 * @param float $value 
	 */
	function setSalesTaxPercent($value)
	{
		$this->SalesTaxPercent = $value;
	}
	/**
	 * @return boolean
	 */
	function getShippingIncludedInTax()
	{
		return $this->ShippingIncludedInTax;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setShippingIncludedInTax($value)
	{
		$this->ShippingIncludedInTax = $value;
	}
	/**
	 * @return string
	 */
	function getJurisdictionName()
	{
		return $this->JurisdictionName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setJurisdictionName($value)
	{
		$this->JurisdictionName = $value;
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
		parent::__construct('TaxJurisdictionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'JurisdictionID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SalesTaxPercent' =>
					array(
						'required' => false,
						'type' => 'float',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingIncludedInTax' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'JurisdictionName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
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
