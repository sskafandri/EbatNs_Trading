<?php
// autogenerated file 09.05.2012 13:15
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies the service that is used to host a listing's pictures. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PictureSourceCodeType.html
 *
 * @property string EPS
 * @property string PictureManager
 * @property string Vendor
 * @property string CustomCode
 */
class PictureSourceCodeType extends EbatNs_FacetType
{
	const CodeType_EPS = 'EPS';
	const CodeType_PictureManager = 'PictureManager';
	const CodeType_Vendor = 'Vendor';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PictureSourceCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PictureSourceCodeType = new PictureSourceCodeType();

?>
