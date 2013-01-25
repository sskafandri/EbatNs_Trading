<?php
// autogenerated file 10.09.2012 12:58
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies values that describe a transaction on an account. Details of the 
 * transaction are returned in AccountEntry. The transaction can be a debit or 
 * credit to the account. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AccountDetailEntryCodeType.html
 *
 * @property string Unknown
 * @property string FeeInsertion
 * @property string FeeBold
 * @property string FeeFeatured
 * @property string FeeCategoryFeatured
 * @property string FeeFinalValue
 * @property string PaymentCheck
 * @property string PaymentCC
 * @property string CreditCourtesy
 * @property string CreditNoSale
 * @property string CreditPartialSale
 * @property string RefundCC
 * @property string RefundCheck
 * @property string FinanceCharge
 * @property string AWDebit
 * @property string AWCredit
 * @property string AWMemo
 * @property string CreditDuplicateListing
 * @property string FeePartialSale
 * @property string PaymentElectronicTransferReversal
 * @property string PaymentCCOnce
 * @property string FeeReturnedCheck
 * @property string FeeRedepositCheck
 * @property string PaymentCash
 * @property string CreditInsertion
 * @property string CreditBold
 * @property string CreditFeatured
 * @property string CreditCategoryFeatured
 * @property string CreditFinalValue
 * @property string FeeNSFCheck
 * @property string FeeReturnCheckClose
 * @property string Memo
 * @property string PaymentMoneyOrder
 * @property string CreditCardOnFile
 * @property string CreditCardNotOnFile
 * @property string Invoiced
 * @property string InvoicedCreditCard
 * @property string CreditTransferFrom
 * @property string DebitTransferTo
 * @property string InvoiceCreditBalance
 * @property string eBayDebit
 * @property string eBayCredit
 * @property string PromotionalCredit
 * @property string CCNotOnFilePerCustReq
 * @property string CreditInsertionFee
 * @property string CCPaymentRejected
 * @property string FeeGiftIcon
 * @property string CreditGiftIcon
 * @property string FeeGallery
 * @property string FeeFeaturedGallery
 * @property string CreditGallery
 * @property string CreditFeaturedGallery
 * @property string ItemMoveFee
 * @property string OutageCredit
 * @property string CreditPSA
 * @property string CreditPCGS
 * @property string FeeReserve
 * @property string CreditReserve
 * @property string eBayVISACredit
 * @property string BBAdminCredit
 * @property string BBAdminDebit
 * @property string ReferrerCredit
 * @property string ReferrerDebit
 * @property string SwitchCurrency
 * @property string PaymentGiftCertificate
 * @property string PaymentWireTransfer
 * @property string PaymentHomeBanking
 * @property string PaymentElectronicTransfer
 * @property string PaymentAdjustmentCredit
 * @property string PaymentAdjustmentDebit
 * @property string Chargeoff
 * @property string ChargeoffRecovery
 * @property string ChargeoffBankruptcy
 * @property string ChargeoffSuspended
 * @property string ChargeoffDeceased
 * @property string ChargeoffOther
 * @property string ChargeoffWacko
 * @property string FinanceChargeReversal
 * @property string FVFCreditReversal
 * @property string ForeignFundsConvert
 * @property string ForeignFundsCheckReversal
 * @property string EOMRestriction
 * @property string AllFeesCredit
 * @property string SetOnHold
 * @property string RevertUserState
 * @property string DirectDebitOnFile
 * @property string DirectDebitNotOnFile
 * @property string PaymentDirectDebit
 * @property string DirectDebitReversal
 * @property string DirectDebitReturnedItem
 * @property string FeeHighlight
 * @property string CreditHighlight
 * @property string BulkUserSuspension
 * @property string FeeRealEstate30DaysListing
 * @property string CreditRealEstate30DaysListing
 * @property string TradingLimitOverrideOn
 * @property string TradingLimitOverrideOff
 * @property string EquifaxRealtimeFee
 * @property string CreditEquifaxRealtimeFee
 * @property string PaymentEquifaxDebit
 * @property string PaymentEquifaxCredit
 * @property string Merged
 * @property string AutoTraderOn
 * @property string AutoTraderOff
 * @property string PaperInvoiceOn
 * @property string PaperInvoiceOff
 * @property string AccountStateSwitch
 * @property string FVFCreditReversalAutomatic
 * @property string CreditSoftOutage
 * @property string LACatalogFee
 * @property string LAExtraItem
 * @property string LACatalogItemFeeRefund
 * @property string LACatalogInsertionRefund
 * @property string LAFinalValueFee
 * @property string LAFinalValueFeeRefund
 * @property string LABuyerPremiumPercentageFee
 * @property string LABuyerPremiumPercentageFeeRefund
 * @property string LAAudioVideoFee
 * @property string LAAudioVideoFeeRefund
 * @property string FeeIPIXPhoto
 * @property string FeeIPIXSlideShow
 * @property string CreditIPIXPhoto
 * @property string CreditIPIXSlideShow
 * @property string FeeTenDayAuction
 * @property string CreditTenDayAuction
 * @property string TemporaryCredit
 * @property string TemporaryCreditReversal
 * @property string SubscriptionAABasic
 * @property string SubscriptionAAPro
 * @property string CreditAABasic
 * @property string CreditAAPro
 * @property string FeeLargePicture
 * @property string CreditLargePicture
 * @property string FeePicturePack
 * @property string CreditPicturePackPartial
 * @property string CreditPicturePackFull
 * @property string SubscriptioneBayStores
 * @property string CrediteBayStores
 * @property string FeeInsertionFixedPrice
 * @property string CreditInsertionFixedPrice
 * @property string FeeFinalValueFixedPrice
 * @property string CreditFinalValueFixedPrice
 * @property string ElectronicInvoiceOn
 * @property string ElectronicInvoiceOff
 * @property string FlagDDDDPending
 * @property string FlagDDPaymentConfirmed
 * @property string FixedPriceDurationFee
 * @property string FixedPriceDurationCredit
 * @property string BuyItNowFee
 * @property string BuyItNowCredit
 * @property string FeeSchedule
 * @property string CreditSchedule
 * @property string SubscriptionSMBasic
 * @property string SubscriptionSMBasicPro
 * @property string CreditSMBasic
 * @property string CreditSMBasicPro
 * @property string StoresGTCFee
 * @property string StoresGTCCredit
 * @property string ListingDesignerFee
 * @property string ListingDesignerCredit
 * @property string ExtendedAuctionFee
 * @property string ExtendedAcutionCredit
 * @property string PayPalOTPSucc
 * @property string PayPalOTPPend
 * @property string PayPalFailed
 * @property string PayPalChargeBack
 * @property string ChargeBack
 * @property string ChargeBackReversal
 * @property string PayPalRefund
 * @property string BonusPointsAddition
 * @property string BonusPointsReduction
 * @property string BonusPointsPaymentAutomatic
 * @property string BonusPointsPaymentManual
 * @property string BonusPointsPaymentReversal
 * @property string BonusPointsCashPayout
 * @property string VATCredit
 * @property string VATDebit
 * @property string VATStatusChangePending
 * @property string VATStatusChangeApproved
 * @property string VATStatusChange_Denied
 * @property string VATStatusDeletedByCSR
 * @property string VATStatusDeletedByUser
 * @property string SMProListingDesignerFee
 * @property string SMProListingDesignerCredit
 * @property string StoresSuccessfulListingFee
 * @property string StoresSuccessfulListingFeeCredit
 * @property string StoresReferralFee
 * @property string StoresReferralCredit
 * @property string SubtitleFee
 * @property string SubtitleFeeCredit
 * @property string eBayStoreInventorySubscriptionCredit
 * @property string AutoPmntReqExempt
 * @property string AutoPmntReqRein
 * @property string PictureManagerSubscriptionFee
 * @property string PictureManagerSubscriptionFeeCredit
 * @property string SellerReportsBasicFee
 * @property string SellerReportsBasicCredit
 * @property string SellerReportsPlusFee
 * @property string SellerReportsPlusCredit
 * @property string PaypalOnFile
 * @property string PaypalOnFileByCSR
 * @property string PaypalOffFile
 * @property string BorderFee
 * @property string BorderFeeCredit
 * @property string FeeSearchableMobileDE
 * @property string SalesReportsPlusFee
 * @property string SalesReportsPlusCredit
 * @property string CreditSearchableMobileDE
 * @property string EmailMarketingFee
 * @property string EmailMarketingCredit
 * @property string FeePictureShow
 * @property string CreditPictureShow
 * @property string ProPackBundleFee
 * @property string ProPackBundleFeeCredit
 * @property string BasicUpgradePackBundleFee
 * @property string BasicUpgradePackBundleFeeCredit
 * @property string ValuePackBundleFee
 * @property string ValuePackBundleFeeCredit
 * @property string ProPackPlusBundleFee
 * @property string ProPackPlusBundleFeeCredit
 * @property string FinalEntry
 * @property string CustomCode
 * @property string ExtendedDurationFee
 * @property string ExtendedDurationFeeCredit
 * @property string InternationalListingFee
 * @property string InternationalListingCredit
 * @property string MarketplaceResearchExpiredSubscriptionFee
 * @property string MarketplaceResearchExpiredSubscriptionFeeCredit
 * @property string MarketplaceResearchBasicSubscriptionFee
 * @property string MarketplaceResearchBasicSubscriptionFeeCredit
 * @property string MarketplaceResearchProSubscriptionFee
 * @property string BasicBundleFee
 * @property string BasicBundleFeeCredit
 * @property string MarketplaceResearchProSubscriptionFeeCredit
 * @property string VehicleLocalSubscriptionFee
 * @property string VehicleLocalSubscriptionFeeCredit
 * @property string VehicleLocalInsertionFee
 * @property string VehicleLocalInsertionFeeCredit
 * @property string VehicleLocalFinalValueFee
 * @property string VehicleLocalFinalValueFeeCredit
 * @property string VehicleLocalGTCFee
 * @property string VehicleLocalGTCFeeCredit
 * @property string eBayMotorsProFee
 * @property string CrediteBayMotorsProFee
 * @property string eBayMotorsProFeatureFee
 * @property string CrediteBayMotorsProFeatureFee
 * @property string FeeGalleryPlus
 * @property string CreditGalleryPlus
 * @property string PrivateListing
 * @property string CreditPrivateListing
 * @property string ImmoProFee
 * @property string CreditImmoProFee
 * @property string ImmoProFeatureFee
 * @property string CreditImmoProFeatureFee
 * @property string RealEstateProFee
 * @property string CreditRealEstateProFee
 * @property string RealEstateProFeatureFee
 * @property string CreditRealEstateProFeatureFee
 * @property string Discount
 * @property string CreditFinalValueShipping
 * @property string FeeFinalValueShipping
 * @property string FeeReturnShipping
 * @property string CreditReturnShipping
 * @property string FeeGlobalShippingProgram
 * @property string CreditGlobalShippingProgram
 */
class AccountDetailEntryCodeType extends EbatNs_FacetType
{
	const CodeType_Unknown = 'Unknown';
	const CodeType_FeeInsertion = 'FeeInsertion';
	const CodeType_FeeBold = 'FeeBold';
	const CodeType_FeeFeatured = 'FeeFeatured';
	const CodeType_FeeCategoryFeatured = 'FeeCategoryFeatured';
	const CodeType_FeeFinalValue = 'FeeFinalValue';
	const CodeType_PaymentCheck = 'PaymentCheck';
	const CodeType_PaymentCC = 'PaymentCC';
	const CodeType_CreditCourtesy = 'CreditCourtesy';
	const CodeType_CreditNoSale = 'CreditNoSale';
	const CodeType_CreditPartialSale = 'CreditPartialSale';
	const CodeType_RefundCC = 'RefundCC';
	const CodeType_RefundCheck = 'RefundCheck';
	const CodeType_FinanceCharge = 'FinanceCharge';
	const CodeType_AWDebit = 'AWDebit';
	const CodeType_AWCredit = 'AWCredit';
	const CodeType_AWMemo = 'AWMemo';
	const CodeType_CreditDuplicateListing = 'CreditDuplicateListing';
	const CodeType_FeePartialSale = 'FeePartialSale';
	const CodeType_PaymentElectronicTransferReversal = 'PaymentElectronicTransferReversal';
	const CodeType_PaymentCCOnce = 'PaymentCCOnce';
	const CodeType_FeeReturnedCheck = 'FeeReturnedCheck';
	const CodeType_FeeRedepositCheck = 'FeeRedepositCheck';
	const CodeType_PaymentCash = 'PaymentCash';
	const CodeType_CreditInsertion = 'CreditInsertion';
	const CodeType_CreditBold = 'CreditBold';
	const CodeType_CreditFeatured = 'CreditFeatured';
	const CodeType_CreditCategoryFeatured = 'CreditCategoryFeatured';
	const CodeType_CreditFinalValue = 'CreditFinalValue';
	const CodeType_FeeNSFCheck = 'FeeNSFCheck';
	const CodeType_FeeReturnCheckClose = 'FeeReturnCheckClose';
	const CodeType_Memo = 'Memo';
	const CodeType_PaymentMoneyOrder = 'PaymentMoneyOrder';
	const CodeType_CreditCardOnFile = 'CreditCardOnFile';
	const CodeType_CreditCardNotOnFile = 'CreditCardNotOnFile';
	const CodeType_Invoiced = 'Invoiced';
	const CodeType_InvoicedCreditCard = 'InvoicedCreditCard';
	const CodeType_CreditTransferFrom = 'CreditTransferFrom';
	const CodeType_DebitTransferTo = 'DebitTransferTo';
	const CodeType_InvoiceCreditBalance = 'InvoiceCreditBalance';
	const CodeType_eBayDebit = 'eBayDebit';
	const CodeType_eBayCredit = 'eBayCredit';
	const CodeType_PromotionalCredit = 'PromotionalCredit';
	const CodeType_CCNotOnFilePerCustReq = 'CCNotOnFilePerCustReq';
	const CodeType_CreditInsertionFee = 'CreditInsertionFee';
	const CodeType_CCPaymentRejected = 'CCPaymentRejected';
	const CodeType_FeeGiftIcon = 'FeeGiftIcon';
	const CodeType_CreditGiftIcon = 'CreditGiftIcon';
	const CodeType_FeeGallery = 'FeeGallery';
	const CodeType_FeeFeaturedGallery = 'FeeFeaturedGallery';
	const CodeType_CreditGallery = 'CreditGallery';
	const CodeType_CreditFeaturedGallery = 'CreditFeaturedGallery';
	const CodeType_ItemMoveFee = 'ItemMoveFee';
	const CodeType_OutageCredit = 'OutageCredit';
	const CodeType_CreditPSA = 'CreditPSA';
	const CodeType_CreditPCGS = 'CreditPCGS';
	const CodeType_FeeReserve = 'FeeReserve';
	const CodeType_CreditReserve = 'CreditReserve';
	const CodeType_eBayVISACredit = 'eBayVISACredit';
	const CodeType_BBAdminCredit = 'BBAdminCredit';
	const CodeType_BBAdminDebit = 'BBAdminDebit';
	const CodeType_ReferrerCredit = 'ReferrerCredit';
	const CodeType_ReferrerDebit = 'ReferrerDebit';
	const CodeType_SwitchCurrency = 'SwitchCurrency';
	const CodeType_PaymentGiftCertificate = 'PaymentGiftCertificate';
	const CodeType_PaymentWireTransfer = 'PaymentWireTransfer';
	const CodeType_PaymentHomeBanking = 'PaymentHomeBanking';
	const CodeType_PaymentElectronicTransfer = 'PaymentElectronicTransfer';
	const CodeType_PaymentAdjustmentCredit = 'PaymentAdjustmentCredit';
	const CodeType_PaymentAdjustmentDebit = 'PaymentAdjustmentDebit';
	const CodeType_Chargeoff = 'Chargeoff';
	const CodeType_ChargeoffRecovery = 'ChargeoffRecovery';
	const CodeType_ChargeoffBankruptcy = 'ChargeoffBankruptcy';
	const CodeType_ChargeoffSuspended = 'ChargeoffSuspended';
	const CodeType_ChargeoffDeceased = 'ChargeoffDeceased';
	const CodeType_ChargeoffOther = 'ChargeoffOther';
	const CodeType_ChargeoffWacko = 'ChargeoffWacko';
	const CodeType_FinanceChargeReversal = 'FinanceChargeReversal';
	const CodeType_FVFCreditReversal = 'FVFCreditReversal';
	const CodeType_ForeignFundsConvert = 'ForeignFundsConvert';
	const CodeType_ForeignFundsCheckReversal = 'ForeignFundsCheckReversal';
	const CodeType_EOMRestriction = 'EOMRestriction';
	const CodeType_AllFeesCredit = 'AllFeesCredit';
	const CodeType_SetOnHold = 'SetOnHold';
	const CodeType_RevertUserState = 'RevertUserState';
	const CodeType_DirectDebitOnFile = 'DirectDebitOnFile';
	const CodeType_DirectDebitNotOnFile = 'DirectDebitNotOnFile';
	const CodeType_PaymentDirectDebit = 'PaymentDirectDebit';
	const CodeType_DirectDebitReversal = 'DirectDebitReversal';
	const CodeType_DirectDebitReturnedItem = 'DirectDebitReturnedItem';
	const CodeType_FeeHighlight = 'FeeHighlight';
	const CodeType_CreditHighlight = 'CreditHighlight';
	const CodeType_BulkUserSuspension = 'BulkUserSuspension';
	const CodeType_FeeRealEstate30DaysListing = 'FeeRealEstate30DaysListing';
	const CodeType_CreditRealEstate30DaysListing = 'CreditRealEstate30DaysListing';
	const CodeType_TradingLimitOverrideOn = 'TradingLimitOverrideOn';
	const CodeType_TradingLimitOverrideOff = 'TradingLimitOverrideOff';
	const CodeType_EquifaxRealtimeFee = 'EquifaxRealtimeFee';
	const CodeType_CreditEquifaxRealtimeFee = 'CreditEquifaxRealtimeFee';
	const CodeType_PaymentEquifaxDebit = 'PaymentEquifaxDebit';
	const CodeType_PaymentEquifaxCredit = 'PaymentEquifaxCredit';
	const CodeType_Merged = 'Merged';
	const CodeType_AutoTraderOn = 'AutoTraderOn';
	const CodeType_AutoTraderOff = 'AutoTraderOff';
	const CodeType_PaperInvoiceOn = 'PaperInvoiceOn';
	const CodeType_PaperInvoiceOff = 'PaperInvoiceOff';
	const CodeType_AccountStateSwitch = 'AccountStateSwitch';
	const CodeType_FVFCreditReversalAutomatic = 'FVFCreditReversalAutomatic';
	const CodeType_CreditSoftOutage = 'CreditSoftOutage';
	const CodeType_LACatalogFee = 'LACatalogFee';
	const CodeType_LAExtraItem = 'LAExtraItem';
	const CodeType_LACatalogItemFeeRefund = 'LACatalogItemFeeRefund';
	const CodeType_LACatalogInsertionRefund = 'LACatalogInsertionRefund';
	const CodeType_LAFinalValueFee = 'LAFinalValueFee';
	const CodeType_LAFinalValueFeeRefund = 'LAFinalValueFeeRefund';
	const CodeType_LABuyerPremiumPercentageFee = 'LABuyerPremiumPercentageFee';
	const CodeType_LABuyerPremiumPercentageFeeRefund = 'LABuyerPremiumPercentageFeeRefund';
	const CodeType_LAAudioVideoFee = 'LAAudioVideoFee';
	const CodeType_LAAudioVideoFeeRefund = 'LAAudioVideoFeeRefund';
	const CodeType_FeeIPIXPhoto = 'FeeIPIXPhoto';
	const CodeType_FeeIPIXSlideShow = 'FeeIPIXSlideShow';
	const CodeType_CreditIPIXPhoto = 'CreditIPIXPhoto';
	const CodeType_CreditIPIXSlideShow = 'CreditIPIXSlideShow';
	const CodeType_FeeTenDayAuction = 'FeeTenDayAuction';
	const CodeType_CreditTenDayAuction = 'CreditTenDayAuction';
	const CodeType_TemporaryCredit = 'TemporaryCredit';
	const CodeType_TemporaryCreditReversal = 'TemporaryCreditReversal';
	const CodeType_SubscriptionAABasic = 'SubscriptionAABasic';
	const CodeType_SubscriptionAAPro = 'SubscriptionAAPro';
	const CodeType_CreditAABasic = 'CreditAABasic';
	const CodeType_CreditAAPro = 'CreditAAPro';
	const CodeType_FeeLargePicture = 'FeeLargePicture';
	const CodeType_CreditLargePicture = 'CreditLargePicture';
	const CodeType_FeePicturePack = 'FeePicturePack';
	const CodeType_CreditPicturePackPartial = 'CreditPicturePackPartial';
	const CodeType_CreditPicturePackFull = 'CreditPicturePackFull';
	const CodeType_SubscriptioneBayStores = 'SubscriptioneBayStores';
	const CodeType_CrediteBayStores = 'CrediteBayStores';
	const CodeType_FeeInsertionFixedPrice = 'FeeInsertionFixedPrice';
	const CodeType_CreditInsertionFixedPrice = 'CreditInsertionFixedPrice';
	const CodeType_FeeFinalValueFixedPrice = 'FeeFinalValueFixedPrice';
	const CodeType_CreditFinalValueFixedPrice = 'CreditFinalValueFixedPrice';
	const CodeType_ElectronicInvoiceOn = 'ElectronicInvoiceOn';
	const CodeType_ElectronicInvoiceOff = 'ElectronicInvoiceOff';
	const CodeType_FlagDDDDPending = 'FlagDDDDPending';
	const CodeType_FlagDDPaymentConfirmed = 'FlagDDPaymentConfirmed';
	const CodeType_FixedPriceDurationFee = 'FixedPriceDurationFee';
	const CodeType_FixedPriceDurationCredit = 'FixedPriceDurationCredit';
	const CodeType_BuyItNowFee = 'BuyItNowFee';
	const CodeType_BuyItNowCredit = 'BuyItNowCredit';
	const CodeType_FeeSchedule = 'FeeSchedule';
	const CodeType_CreditSchedule = 'CreditSchedule';
	const CodeType_SubscriptionSMBasic = 'SubscriptionSMBasic';
	const CodeType_SubscriptionSMBasicPro = 'SubscriptionSMBasicPro';
	const CodeType_CreditSMBasic = 'CreditSMBasic';
	const CodeType_CreditSMBasicPro = 'CreditSMBasicPro';
	const CodeType_StoresGTCFee = 'StoresGTCFee';
	const CodeType_StoresGTCCredit = 'StoresGTCCredit';
	const CodeType_ListingDesignerFee = 'ListingDesignerFee';
	const CodeType_ListingDesignerCredit = 'ListingDesignerCredit';
	const CodeType_ExtendedAuctionFee = 'ExtendedAuctionFee';
	const CodeType_ExtendedAcutionCredit = 'ExtendedAcutionCredit';
	const CodeType_PayPalOTPSucc = 'PayPalOTPSucc';
	const CodeType_PayPalOTPPend = 'PayPalOTPPend';
	const CodeType_PayPalFailed = 'PayPalFailed';
	const CodeType_PayPalChargeBack = 'PayPalChargeBack';
	const CodeType_ChargeBack = 'ChargeBack';
	const CodeType_ChargeBackReversal = 'ChargeBackReversal';
	const CodeType_PayPalRefund = 'PayPalRefund';
	const CodeType_BonusPointsAddition = 'BonusPointsAddition';
	const CodeType_BonusPointsReduction = 'BonusPointsReduction';
	const CodeType_BonusPointsPaymentAutomatic = 'BonusPointsPaymentAutomatic';
	const CodeType_BonusPointsPaymentManual = 'BonusPointsPaymentManual';
	const CodeType_BonusPointsPaymentReversal = 'BonusPointsPaymentReversal';
	const CodeType_BonusPointsCashPayout = 'BonusPointsCashPayout';
	const CodeType_VATCredit = 'VATCredit';
	const CodeType_VATDebit = 'VATDebit';
	const CodeType_VATStatusChangePending = 'VATStatusChangePending';
	const CodeType_VATStatusChangeApproved = 'VATStatusChangeApproved';
	const CodeType_VATStatusChange_Denied = 'VATStatusChange_Denied';
	const CodeType_VATStatusDeletedByCSR = 'VATStatusDeletedByCSR';
	const CodeType_VATStatusDeletedByUser = 'VATStatusDeletedByUser';
	const CodeType_SMProListingDesignerFee = 'SMProListingDesignerFee';
	const CodeType_SMProListingDesignerCredit = 'SMProListingDesignerCredit';
	const CodeType_StoresSuccessfulListingFee = 'StoresSuccessfulListingFee';
	const CodeType_StoresSuccessfulListingFeeCredit = 'StoresSuccessfulListingFeeCredit';
	const CodeType_StoresReferralFee = 'StoresReferralFee';
	const CodeType_StoresReferralCredit = 'StoresReferralCredit';
	const CodeType_SubtitleFee = 'SubtitleFee';
	const CodeType_SubtitleFeeCredit = 'SubtitleFeeCredit';
	const CodeType_eBayStoreInventorySubscriptionCredit = 'eBayStoreInventorySubscriptionCredit';
	const CodeType_AutoPmntReqExempt = 'AutoPmntReqExempt';
	const CodeType_AutoPmntReqRein = 'AutoPmntReqRein';
	const CodeType_PictureManagerSubscriptionFee = 'PictureManagerSubscriptionFee';
	const CodeType_PictureManagerSubscriptionFeeCredit = 'PictureManagerSubscriptionFeeCredit';
	const CodeType_SellerReportsBasicFee = 'SellerReportsBasicFee';
	const CodeType_SellerReportsBasicCredit = 'SellerReportsBasicCredit';
	const CodeType_SellerReportsPlusFee = 'SellerReportsPlusFee';
	const CodeType_SellerReportsPlusCredit = 'SellerReportsPlusCredit';
	const CodeType_PaypalOnFile = 'PaypalOnFile';
	const CodeType_PaypalOnFileByCSR = 'PaypalOnFileByCSR';
	const CodeType_PaypalOffFile = 'PaypalOffFile';
	const CodeType_BorderFee = 'BorderFee';
	const CodeType_BorderFeeCredit = 'BorderFeeCredit';
	const CodeType_FeeSearchableMobileDE = 'FeeSearchableMobileDE';
	const CodeType_SalesReportsPlusFee = 'SalesReportsPlusFee';
	const CodeType_SalesReportsPlusCredit = 'SalesReportsPlusCredit';
	const CodeType_CreditSearchableMobileDE = 'CreditSearchableMobileDE';
	const CodeType_EmailMarketingFee = 'EmailMarketingFee';
	const CodeType_EmailMarketingCredit = 'EmailMarketingCredit';
	const CodeType_FeePictureShow = 'FeePictureShow';
	const CodeType_CreditPictureShow = 'CreditPictureShow';
	const CodeType_ProPackBundleFee = 'ProPackBundleFee';
	const CodeType_ProPackBundleFeeCredit = 'ProPackBundleFeeCredit';
	const CodeType_BasicUpgradePackBundleFee = 'BasicUpgradePackBundleFee';
	const CodeType_BasicUpgradePackBundleFeeCredit = 'BasicUpgradePackBundleFeeCredit';
	const CodeType_ValuePackBundleFee = 'ValuePackBundleFee';
	const CodeType_ValuePackBundleFeeCredit = 'ValuePackBundleFeeCredit';
	const CodeType_ProPackPlusBundleFee = 'ProPackPlusBundleFee';
	const CodeType_ProPackPlusBundleFeeCredit = 'ProPackPlusBundleFeeCredit';
	const CodeType_FinalEntry = 'FinalEntry';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_ExtendedDurationFee = 'ExtendedDurationFee';
	const CodeType_ExtendedDurationFeeCredit = 'ExtendedDurationFeeCredit';
	const CodeType_InternationalListingFee = 'InternationalListingFee';
	const CodeType_InternationalListingCredit = 'InternationalListingCredit';
	const CodeType_MarketplaceResearchExpiredSubscriptionFee = 'MarketplaceResearchExpiredSubscriptionFee';
	const CodeType_MarketplaceResearchExpiredSubscriptionFeeCredit = 'MarketplaceResearchExpiredSubscriptionFeeCredit';
	const CodeType_MarketplaceResearchBasicSubscriptionFee = 'MarketplaceResearchBasicSubscriptionFee';
	const CodeType_MarketplaceResearchBasicSubscriptionFeeCredit = 'MarketplaceResearchBasicSubscriptionFeeCredit';
	const CodeType_MarketplaceResearchProSubscriptionFee = 'MarketplaceResearchProSubscriptionFee';
	const CodeType_BasicBundleFee = 'BasicBundleFee';
	const CodeType_BasicBundleFeeCredit = 'BasicBundleFeeCredit';
	const CodeType_MarketplaceResearchProSubscriptionFeeCredit = 'MarketplaceResearchProSubscriptionFeeCredit';
	const CodeType_VehicleLocalSubscriptionFee = 'VehicleLocalSubscriptionFee';
	const CodeType_VehicleLocalSubscriptionFeeCredit = 'VehicleLocalSubscriptionFeeCredit';
	const CodeType_VehicleLocalInsertionFee = 'VehicleLocalInsertionFee';
	const CodeType_VehicleLocalInsertionFeeCredit = 'VehicleLocalInsertionFeeCredit';
	const CodeType_VehicleLocalFinalValueFee = 'VehicleLocalFinalValueFee';
	const CodeType_VehicleLocalFinalValueFeeCredit = 'VehicleLocalFinalValueFeeCredit';
	const CodeType_VehicleLocalGTCFee = 'VehicleLocalGTCFee';
	const CodeType_VehicleLocalGTCFeeCredit = 'VehicleLocalGTCFeeCredit';
	const CodeType_eBayMotorsProFee = 'eBayMotorsProFee';
	const CodeType_CrediteBayMotorsProFee = 'CrediteBayMotorsProFee';
	const CodeType_eBayMotorsProFeatureFee = 'eBayMotorsProFeatureFee';
	const CodeType_CrediteBayMotorsProFeatureFee = 'CrediteBayMotorsProFeatureFee';
	const CodeType_FeeGalleryPlus = 'FeeGalleryPlus';
	const CodeType_CreditGalleryPlus = 'CreditGalleryPlus';
	const CodeType_PrivateListing = 'PrivateListing';
	const CodeType_CreditPrivateListing = 'CreditPrivateListing';
	const CodeType_ImmoProFee = 'ImmoProFee';
	const CodeType_CreditImmoProFee = 'CreditImmoProFee';
	const CodeType_ImmoProFeatureFee = 'ImmoProFeatureFee';
	const CodeType_CreditImmoProFeatureFee = 'CreditImmoProFeatureFee';
	const CodeType_RealEstateProFee = 'RealEstateProFee';
	const CodeType_CreditRealEstateProFee = 'CreditRealEstateProFee';
	const CodeType_RealEstateProFeatureFee = 'RealEstateProFeatureFee';
	const CodeType_CreditRealEstateProFeatureFee = 'CreditRealEstateProFeatureFee';
	const CodeType_Discount = 'Discount';
	const CodeType_CreditFinalValueShipping = 'CreditFinalValueShipping';
	const CodeType_FeeFinalValueShipping = 'FeeFinalValueShipping';
	const CodeType_FeeReturnShipping = 'FeeReturnShipping';
	const CodeType_CreditReturnShipping = 'CreditReturnShipping';
	const CodeType_FeeGlobalShippingProgram = 'FeeGlobalShippingProgram';
	const CodeType_CreditGlobalShippingProgram = 'CreditGlobalShippingProgram';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AccountDetailEntryCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_AccountDetailEntryCodeType = new AccountDetailEntryCodeType();

?>
