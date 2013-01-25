<?php
// autogenerated file 09.05.2012 12:52
// $Id: $
// $Log: $
//
//
require_once 'TaxTypeCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';
require_once 'TaxDescriptionCodeType.php';

/**
 * Type defining the TaxDetails container, which consists of detailed sales tax 
 * information for an order line item, including the tax type and description, 
 * sales tax on the item cost, and sales tax related to shipping and handling. The 
 * information in this container supercedes/overrides the sales tax information in 
 * the ShippingDetails.SalesTax container. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/TaxDetailsType.html
 *
 */
class TaxDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var TaxTypeCodeType
	 */
	protected $Imposition;
	/**
	 * @var TaxDescriptionCodeType
	 */
	protected $TaxDescription;
	/**
	 * @var AmountType
	 */
	protected $TaxAmount;
	/**
	 * @var AmountType
	 */
	protected $TaxOnSubtotalAmount;
	/**
	 * @var AmountType
	 */
	protected $TaxOnShippingAmount;
	/**
	 * @var AmountType
	 */
	protected $TaxOnHandlingAmount;

	/**
	 * @return TaxTypeCodeType
	 */
	function getImposition()
	{
		return $this->Imposition;
	}
	/**
	 * @return void
	 * @param TaxTypeCodeType $value 
	 */
	function setImposition($value)
	{
		$this->Imposition = $value;
	}
	/**
	 * @return TaxDescriptionCodeType
	 */
	function getTaxDescription()
	{
		return $this->TaxDescription;
	}
	/**
	 * @return void
	 * @param TaxDescriptionCodeType $value 
	 */
	function setTaxDescription($value)
	{
		$this->TaxDescription = $value;
	}
	/**
	 * @return AmountType
	 */
	function getTaxAmount()
	{
		return $this->TaxAmount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setTaxAmount($value)
	{
		$this->TaxAmount = $value;
	}
	/**
	 * @return AmountType
	 */
	function getTaxOnSubtotalAmount()
	{
		return $this->TaxOnSubtotalAmount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setTaxOnSubtotalAmount($value)
	{
		$this->TaxOnSubtotalAmount = $value;
	}
	/**
	 * @return AmountType
	 */
	function getTaxOnShippingAmount()
	{
		return $this->TaxOnShippingAmount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setTaxOnShippingAmount($value)
	{
		$this->TaxOnShippingAmount = $value;
	}
	/**
	 * @return AmountType
	 */
	function getTaxOnHandlingAmount()
	{
		return $this->TaxOnHandlingAmount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setTaxOnHandlingAmount($value)
	{
		$this->TaxOnHandlingAmount = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('TaxDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Imposition' =>
					array(
						'required' => false,
						'type' => 'TaxTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TaxDescription' =>
					array(
						'required' => false,
						'type' => 'TaxDescriptionCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TaxAmount' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TaxOnSubtotalAmount' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TaxOnShippingAmount' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TaxOnHandlingAmount' =>
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
