<?php
// autogenerated file 29.12.2011 14:42
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Defines the current state of the dispute, which determines the valuesthat are 
 * valid for DisputeActivity. DisputeState is an internal valuereturned in the 
 * response. A value can apply to an Unpaid Item or ItemNot Received dispute. A 
 * dispute filed when an item is significantly notas described in the product 
 * listing is a variation of an Item NotReceived dispute. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DisputeStateCodeType.html
 *
 * @property string Locked
 * @property string Closed
 * @property string BuyerFirstResponsePayOption
 * @property string BuyerFirstResponseNoPayOption
 * @property string BuyerFirstResponsePayOptionLateResponse
 * @property string BuyerFirstResponseNoPayOptionLateResponse
 * @property string MutualCommunicationPayOption
 * @property string MutualCommunicationNoPayOption
 * @property string PendingResolve
 * @property string MutualWithdrawalAgreement
 * @property string MutualWithdrawalAgreementLate
 * @property string NotReceivedNoSellerResponse
 * @property string NotAsDescribedNoSellerResponse
 * @property string NotReceivedMutualCommunication
 * @property string NotAsDescribedMutualCommunication
 * @property string MutualAgreementOrBuyerReturningItem
 * @property string ClaimOpened
 * @property string NoDocumentation
 * @property string ClaimClosed
 * @property string ClaimDenied
 * @property string ClaimPending
 * @property string ClaimPaymentPending
 * @property string ClaimPaid
 * @property string ClaimResolved
 * @property string ClaimSubmitted
 * @property string UnpaidItemOpen
 * @property string UPIAssistanceDisabledByeBay
 * @property string UPIAssistanceDisabledBySeller
 * @property string CustomCode
 */
class DisputeStateCodeType extends EbatNs_FacetType
{
	const CodeType_Locked = 'Locked';
	const CodeType_Closed = 'Closed';
	const CodeType_BuyerFirstResponsePayOption = 'BuyerFirstResponsePayOption';
	const CodeType_BuyerFirstResponseNoPayOption = 'BuyerFirstResponseNoPayOption';
	const CodeType_BuyerFirstResponsePayOptionLateResponse = 'BuyerFirstResponsePayOptionLateResponse';
	const CodeType_BuyerFirstResponseNoPayOptionLateResponse = 'BuyerFirstResponseNoPayOptionLateResponse';
	const CodeType_MutualCommunicationPayOption = 'MutualCommunicationPayOption';
	const CodeType_MutualCommunicationNoPayOption = 'MutualCommunicationNoPayOption';
	const CodeType_PendingResolve = 'PendingResolve';
	const CodeType_MutualWithdrawalAgreement = 'MutualWithdrawalAgreement';
	const CodeType_MutualWithdrawalAgreementLate = 'MutualWithdrawalAgreementLate';
	const CodeType_NotReceivedNoSellerResponse = 'NotReceivedNoSellerResponse';
	const CodeType_NotAsDescribedNoSellerResponse = 'NotAsDescribedNoSellerResponse';
	const CodeType_NotReceivedMutualCommunication = 'NotReceivedMutualCommunication';
	const CodeType_NotAsDescribedMutualCommunication = 'NotAsDescribedMutualCommunication';
	const CodeType_MutualAgreementOrBuyerReturningItem = 'MutualAgreementOrBuyerReturningItem';
	const CodeType_ClaimOpened = 'ClaimOpened';
	const CodeType_NoDocumentation = 'NoDocumentation';
	const CodeType_ClaimClosed = 'ClaimClosed';
	const CodeType_ClaimDenied = 'ClaimDenied';
	const CodeType_ClaimPending = 'ClaimPending';
	const CodeType_ClaimPaymentPending = 'ClaimPaymentPending';
	const CodeType_ClaimPaid = 'ClaimPaid';
	const CodeType_ClaimResolved = 'ClaimResolved';
	const CodeType_ClaimSubmitted = 'ClaimSubmitted';
	const CodeType_UnpaidItemOpen = 'UnpaidItemOpen';
	const CodeType_UPIAssistanceDisabledByeBay = 'UPIAssistanceDisabledByeBay';
	const CodeType_UPIAssistanceDisabledBySeller = 'UPIAssistanceDisabledBySeller';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DisputeStateCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DisputeStateCodeType = new DisputeStateCodeType();

?>
