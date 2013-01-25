<?php
// autogenerated file 09.05.2012 13:11
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * A code indicating the status of the refund request. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RefundStatusCodeType.html
 *
 * @property string Successful
 * @property string Pending
 * @property string Failed
 * @property string CustomCode
 */
class RefundStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Successful = 'Successful';
	const CodeType_Pending = 'Pending';
	const CodeType_Failed = 'Failed';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RefundStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_RefundStatusCodeType = new RefundStatusCodeType();

?>
