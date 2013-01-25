<?php
// autogenerated file 15.11.2010 08:29
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/OrderRoleCodeType.html
 *
 * @property string Buyer
 * @property string Seller
 * @property string CustomCode
 */
class OrderRoleCodeType extends EbatNs_FacetType
{
	const CodeType_Buyer = 'Buyer';
	const CodeType_Seller = 'Seller';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('OrderRoleCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_OrderRoleCodeType = new OrderRoleCodeType();

?>