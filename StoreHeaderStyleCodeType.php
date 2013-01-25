<?php
// autogenerated file 10.09.2012 12:58
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreHeaderStyleCodeType.html
 *
 * @property string Full
 * @property string Minimized
 * @property string CustomCode
 */
class StoreHeaderStyleCodeType extends EbatNs_FacetType
{
	const CodeType_Full = 'Full';
	const CodeType_Minimized = 'Minimized';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreHeaderStyleCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_StoreHeaderStyleCodeType = new StoreHeaderStyleCodeType();

?>
