<?php
// autogenerated file 09.05.2012 13:14
// $Id: $
// $Log: $
//
//
require_once 'CountryCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Returns shipping cost estimates for an item for every calculated shipping 
 * servicethat the seller has offered with the listing. This is analogous to the 
 * ShippingCalculator seen in both the buyer and seller web pages. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetItemShippingRequestType.html
 *
 */
class GetItemShippingRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var int
	 */
	protected $QuantitySold;
	/**
	 * @var string
	 */
	protected $DestinationPostalCode;
	/**
	 * @var CountryCodeType
	 */
	protected $DestinationCountryCode;

	/**
	 * @return ItemIDType
	 */
	function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
	/**
	 * @return int
	 */
	function getQuantitySold()
	{
		return $this->QuantitySold;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setQuantitySold($value)
	{
		$this->QuantitySold = $value;
	}
	/**
	 * @return string
	 */
	function getDestinationPostalCode()
	{
		return $this->DestinationPostalCode;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDestinationPostalCode($value)
	{
		$this->DestinationPostalCode = $value;
	}
	/**
	 * @return CountryCodeType
	 */
	function getDestinationCountryCode()
	{
		return $this->DestinationCountryCode;
	}
	/**
	 * @return void
	 * @param CountryCodeType $value 
	 */
	function setDestinationCountryCode($value)
	{
		$this->DestinationCountryCode = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetItemShippingRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QuantitySold' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DestinationPostalCode' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DestinationCountryCode' =>
					array(
						'required' => false,
						'type' => 'CountryCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
