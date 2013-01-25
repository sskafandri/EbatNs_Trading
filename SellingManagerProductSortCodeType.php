<?php
// autogenerated file 09.05.2012 13:11
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Sorting specifications for retrieved Selling Manager inventory products. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellingManagerProductSortCodeType.html
 *
 * @property string ActiveQuantity
 * @property string AvailableToList
 * @property string AveragePrice
 * @property string AverageUnitCost
 * @property string CustomLabel
 * @property string ProductName
 * @property string LastSubmittedDate
 * @property string ScheduledQuantity
 * @property string SoldQuantity
 * @property string SuccessPercent
 * @property string UnsoldQuantity
 * @property string FolderName
 * @property string CustomCode
 */
class SellingManagerProductSortCodeType extends EbatNs_FacetType
{
	const CodeType_ActiveQuantity = 'ActiveQuantity';
	const CodeType_AvailableToList = 'AvailableToList';
	const CodeType_AveragePrice = 'AveragePrice';
	const CodeType_AverageUnitCost = 'AverageUnitCost';
	const CodeType_CustomLabel = 'CustomLabel';
	const CodeType_ProductName = 'ProductName';
	const CodeType_LastSubmittedDate = 'LastSubmittedDate';
	const CodeType_ScheduledQuantity = 'ScheduledQuantity';
	const CodeType_SoldQuantity = 'SoldQuantity';
	const CodeType_SuccessPercent = 'SuccessPercent';
	const CodeType_UnsoldQuantity = 'UnsoldQuantity';
	const CodeType_FolderName = 'FolderName';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellingManagerProductSortCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SellingManagerProductSortCodeType = new SellingManagerProductSortCodeType();

?>
