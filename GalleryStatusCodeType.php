<?php
// autogenerated file 09.05.2012 13:04
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The status of gallery image generation. That status will return either a value 
 * of 'Success' or a value that indicates why the gallery image has not been 
 * generated. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GalleryStatusCodeType.html
 *
 * @property string Success
 * @property string Pending
 * @property string InvalidUrl
 * @property string InvalidProtocol
 * @property string InvalidFile
 * @property string ServerDown
 * @property string ImageNonExistent
 * @property string ImageReadTimeOut
 * @property string InvalidFileFormat
 * @property string ImageProcessingError
 * @property string CustomCode
 */
class GalleryStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Success = 'Success';
	const CodeType_Pending = 'Pending';
	const CodeType_InvalidUrl = 'InvalidUrl';
	const CodeType_InvalidProtocol = 'InvalidProtocol';
	const CodeType_InvalidFile = 'InvalidFile';
	const CodeType_ServerDown = 'ServerDown';
	const CodeType_ImageNonExistent = 'ImageNonExistent';
	const CodeType_ImageReadTimeOut = 'ImageReadTimeOut';
	const CodeType_InvalidFileFormat = 'InvalidFileFormat';
	const CodeType_ImageProcessingError = 'ImageProcessingError';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GalleryStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_GalleryStatusCodeType = new GalleryStatusCodeType();

?>
