<?php
// autogenerated file 22.07.2011 08:57
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies whether a listing feature is enabled for this site and whether it is 
 * restricted to a set of sellers. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ProPackCodeType.html
 *
 * @property string Enabled
 * @property string Disabled
 * @property string PowerSellerOnly
 * @property string TopRatedSellerOnly
 * @property string CustomCode
 */
class ProPackCodeType extends EbatNs_FacetType
{
	const CodeType_Enabled = 'Enabled';
	const CodeType_Disabled = 'Disabled';
	const CodeType_PowerSellerOnly = 'PowerSellerOnly';
	const CodeType_TopRatedSellerOnly = 'TopRatedSellerOnly';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ProPackCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ProPackCodeType = new ProPackCodeType();

?>
