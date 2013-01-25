<?php
// autogenerated file 09.05.2012 12:48
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Describes the type of dispute, either Unpaid Item or Item Not Received. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DisputeRecordTypeCodeType.html
 *
 * @property string UnpaidItem
 * @property string ItemNotReceived
 * @property string HalfDispute
 * @property string CustomCode
 */
class DisputeRecordTypeCodeType extends EbatNs_FacetType
{
	const CodeType_UnpaidItem = 'UnpaidItem';
	const CodeType_ItemNotReceived = 'ItemNotReceived';
	const CodeType_HalfDispute = 'HalfDispute';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DisputeRecordTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DisputeRecordTypeCodeType = new DisputeRecordTypeCodeType();

?>
