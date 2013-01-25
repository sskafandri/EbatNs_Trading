<?php
// autogenerated file 10.09.2012 12:49
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Identifies payment methods used by a buyer to pay aseller. On item listings, 
 * identifies one of the payment methodsseller will accept for the item. Available 
 * payment methods candiffer by site and item. Payment methods are not applicable 
 * to eBayReal Estate ad format listings. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BuyerPaymentMethodCodeType.html
 *
 * @property string None
 * @property string MOCC
 * @property string AmEx
 * @property string PaymentSeeDescription
 * @property string CCAccepted
 * @property string PersonalCheck
 * @property string COD
 * @property string VisaMC
 * @property string PaisaPayAccepted
 * @property string Other
 * @property string PayPal
 * @property string Discover
 * @property string CashOnPickup
 * @property string MoneyXferAccepted
 * @property string MoneyXferAcceptedInCheckout
 * @property string OtherOnlinePayments
 * @property string Escrow
 * @property string PrePayDelivery
 * @property string CODPrePayDelivery
 * @property string PostalTransfer
 * @property string CustomCode
 * @property string LoanCheck
 * @property string CashInPerson
 * @property string ELV
 * @property string PaisaPayEscrow
 * @property string PaisaPayEscrowEMI
 * @property string IntegratedMerchantCreditCard
 * @property string Moneybookers
 * @property string Paymate
 * @property string ProPay
 * @property string PayOnPickup
 * @property string Diners
 * @property string StandardPayment
 */
class BuyerPaymentMethodCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_MOCC = 'MOCC';
	const CodeType_AmEx = 'AmEx';
	const CodeType_PaymentSeeDescription = 'PaymentSeeDescription';
	const CodeType_CCAccepted = 'CCAccepted';
	const CodeType_PersonalCheck = 'PersonalCheck';
	const CodeType_COD = 'COD';
	const CodeType_VisaMC = 'VisaMC';
	const CodeType_PaisaPayAccepted = 'PaisaPayAccepted';
	const CodeType_Other = 'Other';
	const CodeType_PayPal = 'PayPal';
	const CodeType_Discover = 'Discover';
	const CodeType_CashOnPickup = 'CashOnPickup';
	const CodeType_MoneyXferAccepted = 'MoneyXferAccepted';
	const CodeType_MoneyXferAcceptedInCheckout = 'MoneyXferAcceptedInCheckout';
	const CodeType_OtherOnlinePayments = 'OtherOnlinePayments';
	const CodeType_Escrow = 'Escrow';
	const CodeType_PrePayDelivery = 'PrePayDelivery';
	const CodeType_CODPrePayDelivery = 'CODPrePayDelivery';
	const CodeType_PostalTransfer = 'PostalTransfer';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_LoanCheck = 'LoanCheck';
	const CodeType_CashInPerson = 'CashInPerson';
	const CodeType_ELV = 'ELV';
	const CodeType_PaisaPayEscrow = 'PaisaPayEscrow';
	const CodeType_PaisaPayEscrowEMI = 'PaisaPayEscrowEMI';
	const CodeType_IntegratedMerchantCreditCard = 'IntegratedMerchantCreditCard';
	const CodeType_Moneybookers = 'Moneybookers';
	const CodeType_Paymate = 'Paymate';
	const CodeType_ProPay = 'ProPay';
	const CodeType_PayOnPickup = 'PayOnPickup';
	const CodeType_Diners = 'Diners';
	const CodeType_StandardPayment = 'StandardPayment';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BuyerPaymentMethodCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_BuyerPaymentMethodCodeType = new BuyerPaymentMethodCodeType();

?>
