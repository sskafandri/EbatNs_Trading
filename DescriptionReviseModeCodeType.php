<?php
// autogenerated file 09.05.2012 12:48
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DescriptionReviseModeCodeType.html
 *
 * @property string Replace
 * @property string Prepend
 * @property string Append
 * @property string CustomCode
 */
class DescriptionReviseModeCodeType extends EbatNs_FacetType
{
	const CodeType_Replace = 'Replace';
	const CodeType_Prepend = 'Prepend';
	const CodeType_Append = 'Append';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DescriptionReviseModeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DescriptionReviseModeCodeType = new DescriptionReviseModeCodeType();

?>
