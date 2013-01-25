<?php
// autogenerated file 29.12.2011 14:18
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Possible bid action types or states. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BidActionCodeType.html
 *
 * @property string Unknown
 * @property string Bid
 * @property string NotUsed
 * @property string Retraction
 * @property string AutoRetraction
 * @property string Cancelled
 * @property string AutoCancel
 * @property string Absentee
 * @property string BuyItNow
 * @property string Purchase
 * @property string CustomCode
 * @property string Offer
 * @property string Counter
 * @property string Accept
 * @property string Decline
 */
class BidActionCodeType extends EbatNs_FacetType
{
	const CodeType_Unknown = 'Unknown';
	const CodeType_Bid = 'Bid';
	const CodeType_NotUsed = 'NotUsed';
	const CodeType_Retraction = 'Retraction';
	const CodeType_AutoRetraction = 'AutoRetraction';
	const CodeType_Cancelled = 'Cancelled';
	const CodeType_AutoCancel = 'AutoCancel';
	const CodeType_Absentee = 'Absentee';
	const CodeType_BuyItNow = 'BuyItNow';
	const CodeType_Purchase = 'Purchase';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_Offer = 'Offer';
	const CodeType_Counter = 'Counter';
	const CodeType_Accept = 'Accept';
	const CodeType_Decline = 'Decline';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BidActionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_BidActionCodeType = new BidActionCodeType();

?>
