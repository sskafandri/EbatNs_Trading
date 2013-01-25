<?php
// autogenerated file 10.09.2012 12:49
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Describes the current status of your application with regard torules governing 
 * the number of times your application canexecute API calls. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AccessRuleCurrentStatusCodeType.html
 *
 * @property string NotSet
 * @property string HourlyLimitExceeded
 * @property string DailyLimitExceeded
 * @property string PeriodicLimitExceeded
 * @property string HourlySoftLimitExceeded
 * @property string DailySoftLimitExceeded
 * @property string PeriodicSoftLimitExceeded
 * @property string CustomCode
 */
class AccessRuleCurrentStatusCodeType extends EbatNs_FacetType
{
	const CodeType_NotSet = 'NotSet';
	const CodeType_HourlyLimitExceeded = 'HourlyLimitExceeded';
	const CodeType_DailyLimitExceeded = 'DailyLimitExceeded';
	const CodeType_PeriodicLimitExceeded = 'PeriodicLimitExceeded';
	const CodeType_HourlySoftLimitExceeded = 'HourlySoftLimitExceeded';
	const CodeType_DailySoftLimitExceeded = 'DailySoftLimitExceeded';
	const CodeType_PeriodicSoftLimitExceeded = 'PeriodicSoftLimitExceeded';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AccessRuleCurrentStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_AccessRuleCurrentStatusCodeType = new AccessRuleCurrentStatusCodeType();

?>
