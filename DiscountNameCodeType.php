<?php
// autogenerated file 22.07.2011 08:57
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The type of shipping discount profile. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DiscountNameCodeType.html
 *
 * @property string EachAdditionalAmount
 * @property string EachAdditionalAmountOff
 * @property string EachAdditionalPercentOff
 * @property string IndividualItemWeight
 * @property string CombinedItemWeight
 * @property string WeightOff
 * @property string ShippingCostXForAmountY
 * @property string ShippingCostXForItemCountN
 * @property string MaximumShippingCostPerOrder
 * @property string CustomCode
 */
class DiscountNameCodeType extends EbatNs_FacetType
{
	const CodeType_EachAdditionalAmount = 'EachAdditionalAmount';
	const CodeType_EachAdditionalAmountOff = 'EachAdditionalAmountOff';
	const CodeType_EachAdditionalPercentOff = 'EachAdditionalPercentOff';
	const CodeType_IndividualItemWeight = 'IndividualItemWeight';
	const CodeType_CombinedItemWeight = 'CombinedItemWeight';
	const CodeType_WeightOff = 'WeightOff';
	const CodeType_ShippingCostXForAmountY = 'ShippingCostXForAmountY';
	const CodeType_ShippingCostXForItemCountN = 'ShippingCostXForItemCountN';
	const CodeType_MaximumShippingCostPerOrder = 'MaximumShippingCostPerOrder';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DiscountNameCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DiscountNameCodeType = new DiscountNameCodeType();

?>
