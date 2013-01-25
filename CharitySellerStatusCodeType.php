<?php
// autogenerated file 10.09.2012 12:44
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * CharitySellerStatusCodeType - Type declaration to be used by other schema. 
 * Indicates the status of the seller's charity seller account. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CharitySellerStatusCodeType.html
 *
 * @property string Suspended
 * @property string Registered
 * @property string Closed
 * @property string CreditCardExpired
 * @property string TokenExpired
 * @property string CreditCardAboutToExpire
 * @property string RegisteredNoCreditCard
 * @property string NotRegisteredLostDirectSellerStatus
 * @property string DirectDebitRejected
 * @property string RegisteredDirectSeller
 * @property string RegisteredNoPaymentMethod
 * @property string CustomCode
 */
class CharitySellerStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Suspended = 'Suspended';
	const CodeType_Registered = 'Registered';
	const CodeType_Closed = 'Closed';
	const CodeType_CreditCardExpired = 'CreditCardExpired';
	const CodeType_TokenExpired = 'TokenExpired';
	const CodeType_CreditCardAboutToExpire = 'CreditCardAboutToExpire';
	const CodeType_RegisteredNoCreditCard = 'RegisteredNoCreditCard';
	const CodeType_NotRegisteredLostDirectSellerStatus = 'NotRegisteredLostDirectSellerStatus';
	const CodeType_DirectDebitRejected = 'DirectDebitRejected';
	const CodeType_RegisteredDirectSeller = 'RegisteredDirectSeller';
	const CodeType_RegisteredNoPaymentMethod = 'RegisteredNoPaymentMethod';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CharitySellerStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_CharitySellerStatusCodeType = new CharitySellerStatusCodeType();

?>
