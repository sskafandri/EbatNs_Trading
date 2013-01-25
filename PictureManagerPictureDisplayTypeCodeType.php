<?php
// autogenerated file 09.05.2012 13:11
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies the types of images that can be stored in a Picture Manager album. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PictureManagerPictureDisplayTypeCodeType.html
 *
 * @property string Thumbnail
 * @property string BIBO
 * @property string Standard
 * @property string Large
 * @property string Supersize
 * @property string Original
 * @property string CustomCode
 */
class PictureManagerPictureDisplayTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Thumbnail = 'Thumbnail';
	const CodeType_BIBO = 'BIBO';
	const CodeType_Standard = 'Standard';
	const CodeType_Large = 'Large';
	const CodeType_Supersize = 'Supersize';
	const CodeType_Original = 'Original';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PictureManagerPictureDisplayTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PictureManagerPictureDisplayTypeCodeType = new PictureManagerPictureDisplayTypeCodeType();

?>
