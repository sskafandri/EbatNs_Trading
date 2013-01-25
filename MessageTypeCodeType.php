<?php
// autogenerated file 10.09.2012 12:44
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MessageTypeCodeType.html
 *
 * @property string AskSellerQuestion
 * @property string ResponseToASQQuestion
 * @property string ContactEbayMember
 * @property string ContactTransactionPartner
 * @property string ResponseToContacteBayMember
 * @property string ContacteBayMemberViaCommunityLink
 * @property string CustomCode
 * @property string All
 * @property string ContactMyBidder
 * @property string ContacteBayMemberViaAnonymousEmail
 * @property string ClassifiedsContactSeller
 * @property string ClassifiedsBestOffer
 */
class MessageTypeCodeType extends EbatNs_FacetType
{
	const CodeType_AskSellerQuestion = 'AskSellerQuestion';
	const CodeType_ResponseToASQQuestion = 'ResponseToASQQuestion';
	const CodeType_ContactEbayMember = 'ContactEbayMember';
	const CodeType_ContactTransactionPartner = 'ContactTransactionPartner';
	const CodeType_ResponseToContacteBayMember = 'ResponseToContacteBayMember';
	const CodeType_ContacteBayMemberViaCommunityLink = 'ContacteBayMemberViaCommunityLink';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_All = 'All';
	const CodeType_ContactMyBidder = 'ContactMyBidder';
	const CodeType_ContacteBayMemberViaAnonymousEmail = 'ContacteBayMemberViaAnonymousEmail';
	const CodeType_ClassifiedsContactSeller = 'ClassifiedsContactSeller';
	const CodeType_ClassifiedsBestOffer = 'ClassifiedsBestOffer';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MessageTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_MessageTypeCodeType = new MessageTypeCodeType();

?>
