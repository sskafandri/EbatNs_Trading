<?php
// autogenerated file 29.12.2011 14:54
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Enumerated type that indicates whether or not a new DE or AT seller has accepted 
 * theuser agreement related to the new payment process. The new payment process 
 * for the DEand AT sites is scheduled to be implemented in late August 2011. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellereBayPaymentProcessStatusCodeType.html
 *
 * @property string AcceptedUA
 * @property string MustAcceptUA
 * @property string eBayPaymentProcessEnabled
 * @property string CustomCode
 */
class SellereBayPaymentProcessStatusCodeType extends EbatNs_FacetType
{
	const CodeType_AcceptedUA = 'AcceptedUA';
	const CodeType_MustAcceptUA = 'MustAcceptUA';
	const CodeType_eBayPaymentProcessEnabled = 'eBayPaymentProcessEnabled';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellereBayPaymentProcessStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SellereBayPaymentProcessStatusCodeType = new SellereBayPaymentProcessStatusCodeType();

?>
