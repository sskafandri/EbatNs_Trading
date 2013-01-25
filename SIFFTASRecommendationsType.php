<?php
// autogenerated file 09.05.2012 13:11
// $Id: $
// $Log: $
//
//
require_once 'AttributeSetArrayType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Reserved for future use.. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SIFFTASRecommendationsType.html
 *
 */
class SIFFTASRecommendationsType extends EbatNs_ComplexType
{
	/**
	 * @var AttributeSetArrayType
	 */
	protected $AttributeSetArray;

	/**
	 * @return AttributeSetArrayType
	 */
	function getAttributeSetArray()
	{
		return $this->AttributeSetArray;
	}
	/**
	 * @return void
	 * @param AttributeSetArrayType $value 
	 */
	function setAttributeSetArray($value)
	{
		$this->AttributeSetArray = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SIFFTASRecommendationsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'AttributeSetArray' =>
					array(
						'required' => false,
						'type' => 'AttributeSetArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
