<?php
// autogenerated file 09.05.2012 13:08
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * For GetSellerPayments, indicates the type of Half.com payment beingmade (sale or 
 * refund). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PaymentTypeCodeType.html
 *
 * @property string Sale
 * @property string Refund
 * @property string SellerDeniedPayment
 * @property string AdminReversal
 * @property string AllOther
 * @property string RentalExtension
 * @property string RentalBuyout
 * @property string CustomCode
 */
class PaymentTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Sale = 'Sale';
	const CodeType_Refund = 'Refund';
	const CodeType_SellerDeniedPayment = 'SellerDeniedPayment';
	const CodeType_AdminReversal = 'AdminReversal';
	const CodeType_AllOther = 'AllOther';
	const CodeType_RentalExtension = 'RentalExtension';
	const CodeType_RentalBuyout = 'RentalBuyout';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PaymentTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PaymentTypeCodeType = new PaymentTypeCodeType();

?>
