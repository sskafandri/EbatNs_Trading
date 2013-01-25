<?php
// autogenerated file 09.05.2012 13:15
// $Id: $
// $Log: $
//
//
require_once 'ListingTipArrayType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Contains results returned from the Listing Analyzer recommendation engine. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ListingAnalyzerRecommendationsType.html
 *
 */
class ListingAnalyzerRecommendationsType extends EbatNs_ComplexType
{
	/**
	 * @var ListingTipArrayType
	 */
	protected $ListingTipArray;

	/**
	 * @return ListingTipArrayType
	 */
	function getListingTipArray()
	{
		return $this->ListingTipArray;
	}
	/**
	 * @return void
	 * @param ListingTipArrayType $value 
	 */
	function setListingTipArray($value)
	{
		$this->ListingTipArray = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ListingAnalyzerRecommendationsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ListingTipArray' =>
					array(
						'required' => false,
						'type' => 'ListingTipArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
