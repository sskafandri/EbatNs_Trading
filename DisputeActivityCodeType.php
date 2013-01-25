<?php
// autogenerated file 22.07.2011 09:17
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Defines the action taken on a dispute with AddDisputeResponse. The valueyou can 
 * use at a given time depends on the current value of DisputeState(see the 
 * Developer Guide for more information). Some values are forUnpaid Item disputes 
 * and some are for Item Not Received disputes. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DisputeActivityCodeType.html
 *
 * @property string SellerAddInformation
 * @property string SellerCompletedTransaction
 * @property string CameToAgreementNeedFVFCredit
 * @property string SellerEndCommunication
 * @property string MutualAgreementOrNoBuyerResponse
 * @property string SellerOffersRefund
 * @property string SellerShippedItem
 * @property string SellerComment
 * @property string SellerPaymentNotReceived
 * @property string CustomCode
 */
class DisputeActivityCodeType extends EbatNs_FacetType
{
	const CodeType_SellerAddInformation = 'SellerAddInformation';
	const CodeType_SellerCompletedTransaction = 'SellerCompletedTransaction';
	const CodeType_CameToAgreementNeedFVFCredit = 'CameToAgreementNeedFVFCredit';
	const CodeType_SellerEndCommunication = 'SellerEndCommunication';
	const CodeType_MutualAgreementOrNoBuyerResponse = 'MutualAgreementOrNoBuyerResponse';
	const CodeType_SellerOffersRefund = 'SellerOffersRefund';
	const CodeType_SellerShippedItem = 'SellerShippedItem';
	const CodeType_SellerComment = 'SellerComment';
	const CodeType_SellerPaymentNotReceived = 'SellerPaymentNotReceived';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DisputeActivityCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DisputeActivityCodeType = new DisputeActivityCodeType();

?>
