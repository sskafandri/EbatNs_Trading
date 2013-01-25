<?php
// autogenerated file 09.05.2012 13:04
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The policy-compliance rating that reflects how well you are following the 
 * eBaypolicies and rules in your selling activities. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PolicyComplianceStatusCodeType.html
 *
 * @property string Good
 * @property string Fair
 * @property string Poor
 * @property string Failing
 * @property string CustomCode
 */
class PolicyComplianceStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Good = 'Good';
	const CodeType_Fair = 'Fair';
	const CodeType_Poor = 'Poor';
	const CodeType_Failing = 'Failing';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PolicyComplianceStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PolicyComplianceStatusCodeType = new PolicyComplianceStatusCodeType();

?>
