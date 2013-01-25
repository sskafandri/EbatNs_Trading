<?php
// autogenerated file 22.07.2011 09:24
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The VeRO reporting status for an item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/VeROItemStatusCodeType.html
 *
 * @property string Received
 * @property string Submitted
 * @property string Removed
 * @property string SubmissionFailed
 * @property string ClarificationRequired
 * @property string CustomCode
 */
class VeROItemStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Received = 'Received';
	const CodeType_Submitted = 'Submitted';
	const CodeType_Removed = 'Removed';
	const CodeType_SubmissionFailed = 'SubmissionFailed';
	const CodeType_ClarificationRequired = 'ClarificationRequired';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('VeROItemStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_VeROItemStatusCodeType = new VeROItemStatusCodeType();

?>
