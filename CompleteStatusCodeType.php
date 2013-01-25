<?php
// autogenerated file 10.09.2012 12:41
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Indicates whether the order is complete, incomplete, or pending. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CompleteStatusCodeType.html
 *
 * @property string Incomplete
 * @property string Complete
 * @property string Pending
 * @property string CustomCode
 */
class CompleteStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Incomplete = 'Incomplete';
	const CodeType_Complete = 'Complete';
	const CodeType_Pending = 'Pending';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CompleteStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_CompleteStatusCodeType = new CompleteStatusCodeType();

?>
