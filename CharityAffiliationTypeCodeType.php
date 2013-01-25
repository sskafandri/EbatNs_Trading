<?php
// autogenerated file 29.12.2011 14:42
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * CharityAffiliationTypeCodeType - Type declaration to be used by other schema. 
 * Indicates the affiliation status for nonprofit charity organizations registered 
 * with the dedicated eBay Giving Works provider. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CharityAffiliationTypeCodeType.html
 *
 * @property string Community
 * @property string Direct
 * @property string Remove
 * @property string CustomCode
 */
class CharityAffiliationTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Community = 'Community';
	const CodeType_Direct = 'Direct';
	const CodeType_Remove = 'Remove';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CharityAffiliationTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_CharityAffiliationTypeCodeType = new CharityAffiliationTypeCodeType();

?>
