<?php
// autogenerated file 09.05.2012 13:11
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies standard subsets of data to return for each resultwithin the set of 
 * results in the response payload. If nodetail level is specified, a base set of 
 * data is returned.The base set of data varies per call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DetailLevelCodeType.html
 *
 * @property string ReturnAll
 * @property string ItemReturnDescription
 * @property string ItemReturnAttributes
 * @property string ItemReturnCategories
 * @property string ReturnSummary
 * @property string ReturnHeaders
 * @property string ReturnMessages
 */
class DetailLevelCodeType extends EbatNs_FacetType
{
	const CodeType_ReturnAll = 'ReturnAll';
	const CodeType_ItemReturnDescription = 'ItemReturnDescription';
	const CodeType_ItemReturnAttributes = 'ItemReturnAttributes';
	const CodeType_ItemReturnCategories = 'ItemReturnCategories';
	const CodeType_ReturnSummary = 'ReturnSummary';
	const CodeType_ReturnHeaders = 'ReturnHeaders';
	const CodeType_ReturnMessages = 'ReturnMessages';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DetailLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DetailLevelCodeType = new DetailLevelCodeType();

?>
