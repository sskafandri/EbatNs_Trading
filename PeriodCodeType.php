<?php
// autogenerated file 29.12.2011 14:54
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PeriodCodeType.html
 *
 * @property string Days_1
 * @property string Days_30
 * @property string Days_180
 * @property string Days_360
 * @property string Days_540
 * @property string CustomCode
 */
class PeriodCodeType extends EbatNs_FacetType
{
	const CodeType_Days_1 = 'Days_1';
	const CodeType_Days_30 = 'Days_30';
	const CodeType_Days_180 = 'Days_180';
	const CodeType_Days_360 = 'Days_360';
	const CodeType_Days_540 = 'Days_540';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PeriodCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PeriodCodeType = new PeriodCodeType();

?>
