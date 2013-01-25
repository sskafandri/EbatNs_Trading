<?php
// autogenerated file 10.09.2012 12:49
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The status of the best offer. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BestOfferStatusCodeType.html
 *
 * @property string Pending
 * @property string Accepted
 * @property string Declined
 * @property string Expired
 * @property string Retracted
 * @property string AdminEnded
 * @property string Active
 * @property string Countered
 * @property string All
 * @property string CustomCode
 */
class BestOfferStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Pending = 'Pending';
	const CodeType_Accepted = 'Accepted';
	const CodeType_Declined = 'Declined';
	const CodeType_Expired = 'Expired';
	const CodeType_Retracted = 'Retracted';
	const CodeType_AdminEnded = 'AdminEnded';
	const CodeType_Active = 'Active';
	const CodeType_Countered = 'Countered';
	const CodeType_All = 'All';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BestOfferStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_BestOfferStatusCodeType = new BestOfferStatusCodeType();

?>
