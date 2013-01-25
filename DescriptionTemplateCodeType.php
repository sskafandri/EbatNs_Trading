<?php
// autogenerated file 10.09.2012 12:49
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DescriptionTemplateCodeType.html
 *
 * @property string Layout
 * @property string Theme
 * @property string CustomCode
 */
class DescriptionTemplateCodeType extends EbatNs_FacetType
{
	const CodeType_Layout = 'Layout';
	const CodeType_Theme = 'Theme';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DescriptionTemplateCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DescriptionTemplateCodeType = new DescriptionTemplateCodeType();

?>
