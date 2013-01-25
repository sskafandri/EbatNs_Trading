<?php
// autogenerated file 22.07.2011 09:17
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Indicates a specific type of lead generation format listing (within the 
 * classified and localmarketbestofferonly subtypes, which include the general 
 * ClassifiedAd and LocalMarketBestOfferOnly subtype). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ListingSubtypeCodeType.html
 *
 * @property string ClassifiedAd
 * @property string LocalMarketBestOfferOnly
 * @property string CustomCode
 */
class ListingSubtypeCodeType extends EbatNs_FacetType
{
	const CodeType_ClassifiedAd = 'ClassifiedAd';
	const CodeType_LocalMarketBestOfferOnly = 'LocalMarketBestOfferOnly';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ListingSubtypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ListingSubtypeCodeType = new ListingSubtypeCodeType();

?>
