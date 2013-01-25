<?php
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Performance status. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PerformanceStatusCodeType.html
 *
 * @property string TopRated
 * @property string AboveStandard
 * @property string Standard
 * @property string BelowStandard
 * @property string CustomCode
 */
class PerformanceStatusCodeType extends EbatNs_FacetType
{
	const CodeType_TopRated = 'TopRated';
	const CodeType_AboveStandard = 'AboveStandard';
	const CodeType_Standard = 'Standard';
	const CodeType_BelowStandard = 'BelowStandard';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PerformanceStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PerformanceStatusCodeType = new PerformanceStatusCodeType();

?>
