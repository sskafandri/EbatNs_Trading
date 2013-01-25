<?php
// autogenerated file 09.05.2012 13:15
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Describes vendor infomration. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellingManagerVendorDetailsType.html
 *
 */
class SellingManagerVendorDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $VendorName;
	/**
	 * @var string
	 */
	protected $VendorContactInfo;

	/**
	 * @return string
	 */
	function getVendorName()
	{
		return $this->VendorName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setVendorName($value)
	{
		$this->VendorName = $value;
	}
	/**
	 * @return string
	 */
	function getVendorContactInfo()
	{
		return $this->VendorContactInfo;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setVendorContactInfo($value)
	{
		$this->VendorContactInfo = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellingManagerVendorDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'VendorName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'VendorContactInfo' =>
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
