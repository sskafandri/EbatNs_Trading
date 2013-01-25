<?php
// autogenerated file 15.11.2010 08:39
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ProductInfoType.php';

/**
 * Pricing data returned from the Product Pricing engine. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PricingRecommendationsType.html
 *
 */
class PricingRecommendationsType extends EbatNs_ComplexType
{
	/**
	 * @var ProductInfoType
	 */
	protected $ProductInfo;

	/**
	 * @return ProductInfoType
	 */
	function getProductInfo()
	{
		return $this->ProductInfo;
	}
	/**
	 * @return void
	 * @param ProductInfoType $value 
	 */
	function setProductInfo($value)
	{
		$this->ProductInfo = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PricingRecommendationsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ProductInfo' =>
					array(
						'required' => false,
						'type' => 'ProductInfoType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
