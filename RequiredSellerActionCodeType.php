<?php
// autogenerated file 22.07.2011 09:24
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Enumerated type that indicates the next possible action that a seller can take 
 * toexpedite the release of a payment hold. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RequiredSellerActionCodeType.html
 *
 * @property string ResolveeBPCase
 * @property string MarkAsShipped
 * @property string None
 * @property string CustomCode
 */
class RequiredSellerActionCodeType extends EbatNs_FacetType
{
	const CodeType_ResolveeBPCase = 'ResolveeBPCase';
	const CodeType_MarkAsShipped = 'MarkAsShipped';
	const CodeType_None = 'None';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RequiredSellerActionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_RequiredSellerActionCodeType = new RequiredSellerActionCodeType();

?>
