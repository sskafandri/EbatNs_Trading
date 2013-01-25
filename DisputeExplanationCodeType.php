<?php
// autogenerated file 15.11.2010 08:39
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Contains the dispute explanation, entered when the dispute was created.Provides 
 * additional information to supplement the dispute reason. The values 
 * alloweddepend on the value of DisputeReason. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DisputeExplanationCodeType.html
 *
 * @property string BuyerHasNotResponded
 * @property string BuyerRefusedToPay
 * @property string BuyerNotClearedToPay
 * @property string BuyerReturnedItemForRefund
 * @property string UnableToResolveTerms
 * @property string BuyerNoLongerWantsItem
 * @property string BuyerPurchasingMistake
 * @property string ShipCountryNotSupported
 * @property string ShippingAddressNotConfirmed
 * @property string PaymentMethodNotSupported
 * @property string BuyerNoLongerRegistered
 * @property string OtherExplanation
 * @property string Unspecified
 * @property string UPIAssistance
 * @property string BuyerPaymentNotReceivedOrCleared
 * @property string SellerDoesntShipToCountry
 * @property string BuyerNotPaid
 * @property string UPIAssistanceDisabled
 * @property string CustomCode
 */
class DisputeExplanationCodeType extends EbatNs_FacetType
{
	const CodeType_BuyerHasNotResponded = 'BuyerHasNotResponded';
	const CodeType_BuyerRefusedToPay = 'BuyerRefusedToPay';
	const CodeType_BuyerNotClearedToPay = 'BuyerNotClearedToPay';
	const CodeType_BuyerReturnedItemForRefund = 'BuyerReturnedItemForRefund';
	const CodeType_UnableToResolveTerms = 'UnableToResolveTerms';
	const CodeType_BuyerNoLongerWantsItem = 'BuyerNoLongerWantsItem';
	const CodeType_BuyerPurchasingMistake = 'BuyerPurchasingMistake';
	const CodeType_ShipCountryNotSupported = 'ShipCountryNotSupported';
	const CodeType_ShippingAddressNotConfirmed = 'ShippingAddressNotConfirmed';
	const CodeType_PaymentMethodNotSupported = 'PaymentMethodNotSupported';
	const CodeType_BuyerNoLongerRegistered = 'BuyerNoLongerRegistered';
	const CodeType_OtherExplanation = 'OtherExplanation';
	const CodeType_Unspecified = 'Unspecified';
	const CodeType_UPIAssistance = 'UPIAssistance';
	const CodeType_BuyerPaymentNotReceivedOrCleared = 'BuyerPaymentNotReceivedOrCleared';
	const CodeType_SellerDoesntShipToCountry = 'SellerDoesntShipToCountry';
	const CodeType_BuyerNotPaid = 'BuyerNotPaid';
	const CodeType_UPIAssistanceDisabled = 'UPIAssistanceDisabled';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DisputeExplanationCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DisputeExplanationCodeType = new DisputeExplanationCodeType();

?>
