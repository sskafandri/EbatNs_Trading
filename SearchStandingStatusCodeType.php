<?php
// autogenerated file 22.07.2011 09:17
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The Search standing that you have earned. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SearchStandingStatusCodeType.html
 *
 * @property string Raised
 * @property string Standard
 * @property string Lowered
 * @property string CustomCode
 */
class SearchStandingStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Raised = 'Raised';
	const CodeType_Standard = 'Standard';
	const CodeType_Lowered = 'Lowered';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SearchStandingStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SearchStandingStatusCodeType = new SearchStandingStatusCodeType();

?>
