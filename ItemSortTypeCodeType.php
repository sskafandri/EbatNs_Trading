<?php
// autogenerated file 22.07.2011 09:17
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Indicates the field and direction (ascending ordescending) by which to sort a 
 * returned list of items. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ItemSortTypeCodeType.html
 *
 * @property string ItemID
 * @property string Price
 * @property string StartPrice
 * @property string Title
 * @property string BidCount
 * @property string Quantity
 * @property string StartTime
 * @property string EndTime
 * @property string SellerUserID
 * @property string TimeLeft
 * @property string ListingDuration
 * @property string ListingType
 * @property string CurrentPrice
 * @property string ReservePrice
 * @property string MaxBid
 * @property string BidderCount
 * @property string HighBidderUserID
 * @property string BuyerUserID
 * @property string BuyerPostalCode
 * @property string BuyerEmail
 * @property string SellerEmail
 * @property string TotalPrice
 * @property string WatchCount
 * @property string BestOfferCount
 * @property string QuestionCount
 * @property string ShippingServiceCost
 * @property string FeedbackReceived
 * @property string FeedbackLeft
 * @property string UserID
 * @property string QuantitySold
 * @property string BestOffer
 * @property string QuantityAvailable
 * @property string QuantityPurchased
 * @property string WonPlatform
 * @property string SoldPlatform
 * @property string ListingDurationDescending
 * @property string ListingTypeDescending
 * @property string CurrentPriceDescending
 * @property string ReservePriceDescending
 * @property string MaxBidDescending
 * @property string BidderCountDescending
 * @property string HighBidderUserIDDescending
 * @property string BuyerUserIDDescending
 * @property string BuyerPostalCodeDescending
 * @property string BuyerEmailDescending
 * @property string SellerEmailDescending
 * @property string TotalPriceDescending
 * @property string WatchCountDescending
 * @property string QuestionCountDescending
 * @property string ShippingServiceCostDescending
 * @property string FeedbackReceivedDescending
 * @property string FeedbackLeftDescending
 * @property string UserIDDescending
 * @property string QuantitySoldDescending
 * @property string BestOfferCountDescending
 * @property string QuantityAvailableDescending
 * @property string QuantityPurchasedDescending
 * @property string BestOfferDescending
 * @property string ItemIDDescending
 * @property string PriceDescending
 * @property string StartPriceDescending
 * @property string TitleDescending
 * @property string BidCountDescending
 * @property string QuantityDescending
 * @property string StartTimeDescending
 * @property string EndTimeDescending
 * @property string SellerUserIDDescending
 * @property string TimeLeftDescending
 * @property string WonPlatformDescending
 * @property string SoldPlatformDescending
 * @property string LeadCount
 * @property string NewLeadCount
 * @property string LeadCountDescending
 * @property string NewLeadCountDescending
 * @property string ClassifiedAdPayPerLeadFee
 * @property string ClassifiedAdPayPerLeadFeeDescending
 * @property string CustomCode
 */
class ItemSortTypeCodeType extends EbatNs_FacetType
{
	const CodeType_ItemID = 'ItemID';
	const CodeType_Price = 'Price';
	const CodeType_StartPrice = 'StartPrice';
	const CodeType_Title = 'Title';
	const CodeType_BidCount = 'BidCount';
	const CodeType_Quantity = 'Quantity';
	const CodeType_StartTime = 'StartTime';
	const CodeType_EndTime = 'EndTime';
	const CodeType_SellerUserID = 'SellerUserID';
	const CodeType_TimeLeft = 'TimeLeft';
	const CodeType_ListingDuration = 'ListingDuration';
	const CodeType_ListingType = 'ListingType';
	const CodeType_CurrentPrice = 'CurrentPrice';
	const CodeType_ReservePrice = 'ReservePrice';
	const CodeType_MaxBid = 'MaxBid';
	const CodeType_BidderCount = 'BidderCount';
	const CodeType_HighBidderUserID = 'HighBidderUserID';
	const CodeType_BuyerUserID = 'BuyerUserID';
	const CodeType_BuyerPostalCode = 'BuyerPostalCode';
	const CodeType_BuyerEmail = 'BuyerEmail';
	const CodeType_SellerEmail = 'SellerEmail';
	const CodeType_TotalPrice = 'TotalPrice';
	const CodeType_WatchCount = 'WatchCount';
	const CodeType_BestOfferCount = 'BestOfferCount';
	const CodeType_QuestionCount = 'QuestionCount';
	const CodeType_ShippingServiceCost = 'ShippingServiceCost';
	const CodeType_FeedbackReceived = 'FeedbackReceived';
	const CodeType_FeedbackLeft = 'FeedbackLeft';
	const CodeType_UserID = 'UserID';
	const CodeType_QuantitySold = 'QuantitySold';
	const CodeType_BestOffer = 'BestOffer';
	const CodeType_QuantityAvailable = 'QuantityAvailable';
	const CodeType_QuantityPurchased = 'QuantityPurchased';
	const CodeType_WonPlatform = 'WonPlatform';
	const CodeType_SoldPlatform = 'SoldPlatform';
	const CodeType_ListingDurationDescending = 'ListingDurationDescending';
	const CodeType_ListingTypeDescending = 'ListingTypeDescending';
	const CodeType_CurrentPriceDescending = 'CurrentPriceDescending';
	const CodeType_ReservePriceDescending = 'ReservePriceDescending';
	const CodeType_MaxBidDescending = 'MaxBidDescending';
	const CodeType_BidderCountDescending = 'BidderCountDescending';
	const CodeType_HighBidderUserIDDescending = 'HighBidderUserIDDescending';
	const CodeType_BuyerUserIDDescending = 'BuyerUserIDDescending';
	const CodeType_BuyerPostalCodeDescending = 'BuyerPostalCodeDescending';
	const CodeType_BuyerEmailDescending = 'BuyerEmailDescending';
	const CodeType_SellerEmailDescending = 'SellerEmailDescending';
	const CodeType_TotalPriceDescending = 'TotalPriceDescending';
	const CodeType_WatchCountDescending = 'WatchCountDescending';
	const CodeType_QuestionCountDescending = 'QuestionCountDescending';
	const CodeType_ShippingServiceCostDescending = 'ShippingServiceCostDescending';
	const CodeType_FeedbackReceivedDescending = 'FeedbackReceivedDescending';
	const CodeType_FeedbackLeftDescending = 'FeedbackLeftDescending';
	const CodeType_UserIDDescending = 'UserIDDescending';
	const CodeType_QuantitySoldDescending = 'QuantitySoldDescending';
	const CodeType_BestOfferCountDescending = 'BestOfferCountDescending';
	const CodeType_QuantityAvailableDescending = 'QuantityAvailableDescending';
	const CodeType_QuantityPurchasedDescending = 'QuantityPurchasedDescending';
	const CodeType_BestOfferDescending = 'BestOfferDescending';
	const CodeType_ItemIDDescending = 'ItemIDDescending';
	const CodeType_PriceDescending = 'PriceDescending';
	const CodeType_StartPriceDescending = 'StartPriceDescending';
	const CodeType_TitleDescending = 'TitleDescending';
	const CodeType_BidCountDescending = 'BidCountDescending';
	const CodeType_QuantityDescending = 'QuantityDescending';
	const CodeType_StartTimeDescending = 'StartTimeDescending';
	const CodeType_EndTimeDescending = 'EndTimeDescending';
	const CodeType_SellerUserIDDescending = 'SellerUserIDDescending';
	const CodeType_TimeLeftDescending = 'TimeLeftDescending';
	const CodeType_WonPlatformDescending = 'WonPlatformDescending';
	const CodeType_SoldPlatformDescending = 'SoldPlatformDescending';
	const CodeType_LeadCount = 'LeadCount';
	const CodeType_NewLeadCount = 'NewLeadCount';
	const CodeType_LeadCountDescending = 'LeadCountDescending';
	const CodeType_NewLeadCountDescending = 'NewLeadCountDescending';
	const CodeType_ClassifiedAdPayPerLeadFee = 'ClassifiedAdPayPerLeadFee';
	const CodeType_ClassifiedAdPayPerLeadFeeDescending = 'ClassifiedAdPayPerLeadFeeDescending';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ItemSortTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ItemSortTypeCodeType = new ItemSortTypeCodeType();

?>
