<?php
// autogenerated file 29.12.2011 14:54
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'SiteHostedPictureDetailsType.php';

/**
 * Contains information about a picture upload (i.e., information about a 
 * pictureupload containing a binary attachment of an image). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/UploadSiteHostedPicturesResponseType.html
 *
 */
class UploadSiteHostedPicturesResponseType extends AbstractResponseType
{
	/**
	 * @var int
	 */
	protected $PictureSystemVersion;
	/**
	 * @var SiteHostedPictureDetailsType
	 */
	protected $SiteHostedPictureDetails;

	/**
	 * @return int
	 */
	function getPictureSystemVersion()
	{
		return $this->PictureSystemVersion;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPictureSystemVersion($value)
	{
		$this->PictureSystemVersion = $value;
	}
	/**
	 * @return SiteHostedPictureDetailsType
	 */
	function getSiteHostedPictureDetails()
	{
		return $this->SiteHostedPictureDetails;
	}
	/**
	 * @return void
	 * @param SiteHostedPictureDetailsType $value 
	 */
	function setSiteHostedPictureDetails($value)
	{
		$this->SiteHostedPictureDetails = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('UploadSiteHostedPicturesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PictureSystemVersion' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SiteHostedPictureDetails' =>
					array(
						'required' => false,
						'type' => 'SiteHostedPictureDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
