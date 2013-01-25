<?php
// autogenerated file 09.05.2012 13:19
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * A code indicating the reason why a refund was not issued by the seller. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RefundFailureCodeType.html
 *
 * @property string PaypalBillingAgreementCanceled
 * @property string PaypalRiskDeclinesTransaction
 * @property string CustomCode
 */
class RefundFailureCodeType extends EbatNs_FacetType
{
	const CodeType_PaypalBillingAgreementCanceled = 'PaypalBillingAgreementCanceled';
	const CodeType_PaypalRiskDeclinesTransaction = 'PaypalRiskDeclinesTransaction';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RefundFailureCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_RefundFailureCodeType = new RefundFailureCodeType();

?>
