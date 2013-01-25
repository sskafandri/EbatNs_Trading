<?php
// autogenerated file 09.05.2012 12:48
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Mark paid status type 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellingManagerPaidStatusCodeType.html
 *
 * @property string Paid
 * @property string PartiallyPaid
 * @property string Unpaid
 * @property string Pending
 * @property string Refunded
 * @property string CustomCode
 */
class SellingManagerPaidStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Paid = 'Paid';
	const CodeType_PartiallyPaid = 'PartiallyPaid';
	const CodeType_Unpaid = 'Unpaid';
	const CodeType_Pending = 'Pending';
	const CodeType_Refunded = 'Refunded';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellingManagerPaidStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SellingManagerPaidStatusCodeType = new SellingManagerPaidStatusCodeType();

?>
