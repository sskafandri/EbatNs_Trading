<?php
// autogenerated file 22.07.2011 08:57
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Used to indicate whether ID-based attributes have been converted to custom Item 
 * Specifics. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AttributeConversionEnabledCodeType.html
 *
 * @property string NotApplicable
 * @property string Enabled
 * @property string Disabled
 * @property string CustomCode
 */
class AttributeConversionEnabledCodeType extends EbatNs_FacetType
{
	const CodeType_NotApplicable = 'NotApplicable';
	const CodeType_Enabled = 'Enabled';
	const CodeType_Disabled = 'Disabled';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AttributeConversionEnabledCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_AttributeConversionEnabledCodeType = new AttributeConversionEnabledCodeType();

?>
