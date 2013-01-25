<?php
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * For vehicles listed through the US eBay Motors site, DepositTypeindicates how 
 * the buyer should pay the deposit amount. It isused in conjunction with a buyer 
 * payment method (BuyerPaymentMethodCodeType). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DepositTypeCodeType.html
 *
 * @property string None
 * @property string OtherMethod
 * @property string FastDeposit
 * @property string CustomCode
 */
class DepositTypeCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_OtherMethod = 'OtherMethod';
	const CodeType_FastDeposit = 'FastDeposit';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DepositTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DepositTypeCodeType = new DepositTypeCodeType();

?>
