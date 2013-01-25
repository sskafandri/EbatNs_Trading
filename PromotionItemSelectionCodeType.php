<?php
// autogenerated file 09.05.2012 13:08
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * PromotionItemSelectionCodeType - Type declaration to be used byother schema. 
 * Indicates how the cross-promoted item was selected forassociation with the 
 * referring item. If the seller defined anitem-to-item cross-promotion rule and 
 * the item was selected becauseof that rule, then "Manual" is returned. If the 
 * seller defined someother rule and the item was selected because of that rule (or 
 * theseller defined no rules that could be applied), then "Automatic" isreturned. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PromotionItemSelectionCodeType.html
 *
 * @property string Manual
 * @property string Automatic
 * @property string CustomCode
 */
class PromotionItemSelectionCodeType extends EbatNs_FacetType
{
	const CodeType_Manual = 'Manual';
	const CodeType_Automatic = 'Automatic';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PromotionItemSelectionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PromotionItemSelectionCodeType = new PromotionItemSelectionCodeType();

?>
