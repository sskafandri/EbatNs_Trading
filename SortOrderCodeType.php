<?php
// autogenerated file 09.05.2012 13:19
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Indicates the order in which the catalog search engine will sort the results 
 * ifyou pass a sort attribute (SortAttributeID) in search requests. 
 * Applicationscannot change the sort order of a sort attribute. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SortOrderCodeType.html
 *
 * @property string Ascending
 * @property string Descending
 * @property string CustomCode
 */
class SortOrderCodeType extends EbatNs_FacetType
{
	const CodeType_Ascending = 'Ascending';
	const CodeType_Descending = 'Descending';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SortOrderCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SortOrderCodeType = new SortOrderCodeType();

?>
