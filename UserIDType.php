<?php
// autogenerated file 09.05.2012 13:15
// $Id: $
// $Log: $
//
require_once 'EbatNs_SimpleType.php';

/**
 * An eBay ID that uniquely identifies a user. <br><br>For GetAllBidders,some 
 * bidder information is anonymous, to protect bidders from fraud. If the seller 
 * makes this API call, the actual ids of all bidders on the seller's item will be 
 * returned. If a bidder makes this API call, the bidder's actual id will be 
 * returned, but information for all competing bidders or outside watchers will be 
 * returned as anonymized userIDs. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/UserIDType.html
 *
 */
class UserIDType extends EbatNs_SimpleType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('UserIDType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_UserIDType = new UserIDType();

?>
