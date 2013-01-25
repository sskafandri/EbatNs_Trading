<?php
// autogenerated file 22.07.2011 08:53
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The watermark choice made by the seller. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PictureWatermarkCodeType.html
 *
 * @property string User
 * @property string Icon
 * @property string CustomCode
 */
class PictureWatermarkCodeType extends EbatNs_FacetType
{
	const CodeType_User = 'User';
	const CodeType_Icon = 'Icon';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PictureWatermarkCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PictureWatermarkCodeType = new PictureWatermarkCodeType();

?>
