<?php
// autogenerated file 09.05.2012 13:08
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies the criteria for filtering search results by site, where site is 
 * determined by the site ID in the request. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PreferredLocationCodeType.html
 *
 * @property string ListedInCurrencyImplied
 * @property string LocatedInCountryImplied
 * @property string AvailableInCountryImplied
 * @property string SiteImplied
 * @property string BelgiumListing
 * @property string CustomCode
 */
class PreferredLocationCodeType extends EbatNs_FacetType
{
	const CodeType_ListedInCurrencyImplied = 'ListedInCurrencyImplied';
	const CodeType_LocatedInCountryImplied = 'LocatedInCountryImplied';
	const CodeType_AvailableInCountryImplied = 'AvailableInCountryImplied';
	const CodeType_SiteImplied = 'SiteImplied';
	const CodeType_BelgiumListing = 'BelgiumListing';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PreferredLocationCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PreferredLocationCodeType = new PreferredLocationCodeType();

?>
