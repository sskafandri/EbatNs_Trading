<?php
// autogenerated file 10.09.2012 12:41
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * This code identifies the types of balances in an account, e.g., a PayPal 
 * account. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BalanceCodeType.html
 *
 * @property string Other
 * @property string CustomCode
 */
class BalanceCodeType extends EbatNs_FacetType
{
	const CodeType_Other = 'Other';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BalanceCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_BalanceCodeType = new BalanceCodeType();

?>
