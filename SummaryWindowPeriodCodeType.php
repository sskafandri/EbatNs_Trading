<?php
// autogenerated file 22.07.2011 08:57
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The period of time for which to create a summary. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SummaryWindowPeriodCodeType.html
 *
 * @property string Last24Hours
 * @property string Last7Days
 * @property string Last31Days
 * @property string CurrentWeek
 * @property string LastWeek
 * @property string CurrentMonth
 * @property string LastMonth
 * @property string Last60Days
 * @property string CustomCode
 */
class SummaryWindowPeriodCodeType extends EbatNs_FacetType
{
	const CodeType_Last24Hours = 'Last24Hours';
	const CodeType_Last7Days = 'Last7Days';
	const CodeType_Last31Days = 'Last31Days';
	const CodeType_CurrentWeek = 'CurrentWeek';
	const CodeType_LastWeek = 'LastWeek';
	const CodeType_CurrentMonth = 'CurrentMonth';
	const CodeType_LastMonth = 'LastMonth';
	const CodeType_Last60Days = 'Last60Days';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SummaryWindowPeriodCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SummaryWindowPeriodCodeType = new SummaryWindowPeriodCodeType();

?>
