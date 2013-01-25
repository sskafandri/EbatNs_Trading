<?php
// autogenerated file 10.09.2012 12:58
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Identifies the scheme used for a cross-promotion rule.The scheme defines 
 * referring and promoted items and categories.To define a rule scheme, you must be 
 * the owner of an eBay Store. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PromotionSchemeCodeType.html
 *
 * @property string ItemToItem
 * @property string ItemToStoreCat
 * @property string StoreToStoreCat
 * @property string ItemToDefaultRule
 * @property string DefaultRule
 * @property string CategoryProximity
 * @property string RelatedCategoryRule
 * @property string DefaultUpSellLogic
 * @property string DefaultCrossSellLogic
 * @property string CustomCode
 */
class PromotionSchemeCodeType extends EbatNs_FacetType
{
	const CodeType_ItemToItem = 'ItemToItem';
	const CodeType_ItemToStoreCat = 'ItemToStoreCat';
	const CodeType_StoreToStoreCat = 'StoreToStoreCat';
	const CodeType_ItemToDefaultRule = 'ItemToDefaultRule';
	const CodeType_DefaultRule = 'DefaultRule';
	const CodeType_CategoryProximity = 'CategoryProximity';
	const CodeType_RelatedCategoryRule = 'RelatedCategoryRule';
	const CodeType_DefaultUpSellLogic = 'DefaultUpSellLogic';
	const CodeType_DefaultCrossSellLogic = 'DefaultCrossSellLogic';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PromotionSchemeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PromotionSchemeCodeType = new PromotionSchemeCodeType();

?>
