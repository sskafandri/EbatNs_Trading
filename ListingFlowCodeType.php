<?php
// autogenerated file 09.05.2012 13:00
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * ListingFlowCodeType - Type declaration to be used by other schema.Identifies the 
 * listing flows on the eBay Web site for use with calls 
 * likeGetItemRecommendations. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ListingFlowCodeType.html
 *
 * @property string AddItem
 * @property string ReviseItem
 * @property string RelistItem
 * @property string CustomCode
 */
class ListingFlowCodeType extends EbatNs_FacetType
{
	const CodeType_AddItem = 'AddItem';
	const CodeType_ReviseItem = 'ReviseItem';
	const CodeType_RelistItem = 'RelistItem';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ListingFlowCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ListingFlowCodeType = new ListingFlowCodeType();

?>
