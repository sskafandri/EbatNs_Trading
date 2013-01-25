<?php
// autogenerated file 09.05.2012 12:52
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Container for eBay's Business User features. A business seller can chooseto 
 * offer an item exclusively to bidders and buyers that also represent 
 * businesses.Only applicable when the item is listed in a B2B-enabled 
 * category.Currently, the eBay Germany (DE), Austria (AT), and Switzerland (CH) 
 * sites supportB2B business features. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/VATDetailsType.html
 *
 */
class VATDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var boolean
	 */
	protected $BusinessSeller;
	/**
	 * @var boolean
	 */
	protected $RestrictedToBusiness;
	/**
	 * @var float
	 */
	protected $VATPercent;
	/**
	 * @var string
	 */
	protected $VATSite;
	/**
	 * @var string
	 */
	protected $VATID;

	/**
	 * @return boolean
	 */
	function getBusinessSeller()
	{
		return $this->BusinessSeller;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setBusinessSeller($value)
	{
		$this->BusinessSeller = $value;
	}
	/**
	 * @return boolean
	 */
	function getRestrictedToBusiness()
	{
		return $this->RestrictedToBusiness;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setRestrictedToBusiness($value)
	{
		$this->RestrictedToBusiness = $value;
	}
	/**
	 * @return float
	 */
	function getVATPercent()
	{
		return $this->VATPercent;
	}
	/**
	 * @return void
	 * @param float $value 
	 */
	function setVATPercent($value)
	{
		$this->VATPercent = $value;
	}
	/**
	 * @return string
	 */
	function getVATSite()
	{
		return $this->VATSite;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setVATSite($value)
	{
		$this->VATSite = $value;
	}
	/**
	 * @return string
	 */
	function getVATID()
	{
		return $this->VATID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setVATID($value)
	{
		$this->VATID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('VATDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'BusinessSeller' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RestrictedToBusiness' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'VATPercent' =>
					array(
						'required' => false,
						'type' => 'float',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'VATSite' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'VATID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
