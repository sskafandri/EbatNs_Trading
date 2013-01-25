<?php
// autogenerated file 09.05.2012 13:08
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Indicates whether one attribute or multiple attributes can be usedas the search 
 * criteria when calling GetProductSearchResults. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CharacteristicsSearchCodeType.html
 *
 * @property string Single
 * @property string Multi
 * @property string CustomCode
 */
class CharacteristicsSearchCodeType extends EbatNs_FacetType
{
	const CodeType_Single = 'Single';
	const CodeType_Multi = 'Multi';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CharacteristicsSearchCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_CharacteristicsSearchCodeType = new CharacteristicsSearchCodeType();

?>
