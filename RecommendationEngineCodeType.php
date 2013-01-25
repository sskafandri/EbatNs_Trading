<?php
// autogenerated file 10.09.2012 12:58
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * RecommendationEngineCodeType - Type declaration to be used by other 
 * schema.Identifies the engines that can be used to analyze proposed listing 
 * data.See the Developer's Guide for a list of recommendation engines thatare 
 * currently operational. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RecommendationEngineCodeType.html
 *
 * @property string ListingAnalyzer
 * @property string SIFFTAS
 * @property string ProductPricing
 * @property string CustomCode
 * @property string SuggestedAttributes
 * @property string ItemSpecifics
 */
class RecommendationEngineCodeType extends EbatNs_FacetType
{
	const CodeType_ListingAnalyzer = 'ListingAnalyzer';
	const CodeType_SIFFTAS = 'SIFFTAS';
	const CodeType_ProductPricing = 'ProductPricing';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_SuggestedAttributes = 'SuggestedAttributes';
	const CodeType_ItemSpecifics = 'ItemSpecifics';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RecommendationEngineCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_RecommendationEngineCodeType = new RecommendationEngineCodeType();

?>
