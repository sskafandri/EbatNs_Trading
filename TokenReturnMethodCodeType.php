<?php
// autogenerated file 10.09.2012 12:49
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Indicates how the application wants eBay to handle the user's token afterthe 
 * user signs in. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/TokenReturnMethodCodeType.html
 *
 * @property string Redirect
 * @property string FetchToken
 * @property string CustomCode
 */
class TokenReturnMethodCodeType extends EbatNs_FacetType
{
	const CodeType_Redirect = 'Redirect';
	const CodeType_FetchToken = 'FetchToken';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('TokenReturnMethodCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_TokenReturnMethodCodeType = new TokenReturnMethodCodeType();

?>
