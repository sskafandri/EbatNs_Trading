<?php
// autogenerated file 09.05.2012 13:04
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The Detail Level argument for GetCategories allows the following settings 
 * tocontrol the detail level of the result set. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CategoryFeatureDetailLevelCodeType.html
 *
 * @property string ReturnAll
 * @property string ReturnFeatureDefinitions
 * @property string CustomCode
 */
class CategoryFeatureDetailLevelCodeType extends EbatNs_FacetType
{
	const CodeType_ReturnAll = 'ReturnAll';
	const CodeType_ReturnFeatureDefinitions = 'ReturnFeatureDefinitions';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CategoryFeatureDetailLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_CategoryFeatureDetailLevelCodeType = new CategoryFeatureDetailLevelCodeType();

?>
