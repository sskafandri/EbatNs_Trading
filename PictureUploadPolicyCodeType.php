<?php
// autogenerated file 15.11.2010 08:39
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Values to be used in choosing that an uploaded picture is added to the available 
 * pictures on the eBay site. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PictureUploadPolicyCodeType.html
 *
 * @property string Add
 * @property string ClearAndAdd
 * @property string CustomCode
 */
class PictureUploadPolicyCodeType extends EbatNs_FacetType
{
	const CodeType_Add = 'Add';
	const CodeType_ClearAndAdd = 'ClearAndAdd';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PictureUploadPolicyCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PictureUploadPolicyCodeType = new PictureUploadPolicyCodeType();

?>
