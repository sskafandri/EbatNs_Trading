<?php
// autogenerated file 29.12.2011 14:54
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'PictureFormatCodeType.php';
require_once 'PictureSetMemberType.php';
require_once 'PictureSetCodeType.php';

/**
 * Contains information about a UploadSiteHostedPictures upload. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SiteHostedPictureDetailsType.html
 *
 */
class SiteHostedPictureDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $PictureName;
	/**
	 * @var PictureSetCodeType
	 */
	protected $PictureSet;
	/**
	 * @var PictureFormatCodeType
	 */
	protected $PictureFormat;
	/**
	 * @var anyURI
	 */
	protected $FullURL;
	/**
	 * @var anyURI
	 */
	protected $BaseURL;
	/**
	 * @var PictureSetMemberType
	 */
	protected $PictureSetMember;
	/**
	 * @var anyURI
	 */
	protected $ExternalPictureURL;
	/**
	 * @var dateTime
	 */
	protected $UseByDate;

	/**
	 * @return string
	 */
	function getPictureName()
	{
		return $this->PictureName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPictureName($value)
	{
		$this->PictureName = $value;
	}
	/**
	 * @return PictureSetCodeType
	 */
	function getPictureSet()
	{
		return $this->PictureSet;
	}
	/**
	 * @return void
	 * @param PictureSetCodeType $value 
	 */
	function setPictureSet($value)
	{
		$this->PictureSet = $value;
	}
	/**
	 * @return PictureFormatCodeType
	 */
	function getPictureFormat()
	{
		return $this->PictureFormat;
	}
	/**
	 * @return void
	 * @param PictureFormatCodeType $value 
	 */
	function setPictureFormat($value)
	{
		$this->PictureFormat = $value;
	}
	/**
	 * @return anyURI
	 */
	function getFullURL()
	{
		return $this->FullURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setFullURL($value)
	{
		$this->FullURL = $value;
	}
	/**
	 * @return anyURI
	 */
	function getBaseURL()
	{
		return $this->BaseURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setBaseURL($value)
	{
		$this->BaseURL = $value;
	}
	/**
	 * @return PictureSetMemberType
	 * @param integer $index 
	 */
	function getPictureSetMember($index = null)
	{
		if ($index !== null) {
			return $this->PictureSetMember[$index];
		} else {
			return $this->PictureSetMember;
		}
	}
	/**
	 * @return void
	 * @param PictureSetMemberType $value 
	 * @param  $index 
	 */
	function setPictureSetMember($value, $index = null)
	{
		if ($index !== null) {
			$this->PictureSetMember[$index] = $value;
		} else {
			$this->PictureSetMember = $value;
		}
	}
	/**
	 * @return void
	 * @param PictureSetMemberType $value 
	 */
	function addPictureSetMember($value)
	{
		$this->PictureSetMember[] = $value;
	}
	/**
	 * @return anyURI
	 */
	function getExternalPictureURL()
	{
		return $this->ExternalPictureURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setExternalPictureURL($value)
	{
		$this->ExternalPictureURL = $value;
	}
	/**
	 * @return dateTime
	 */
	function getUseByDate()
	{
		return $this->UseByDate;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setUseByDate($value)
	{
		$this->UseByDate = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SiteHostedPictureDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PictureName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PictureSet' =>
					array(
						'required' => false,
						'type' => 'PictureSetCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PictureFormat' =>
					array(
						'required' => false,
						'type' => 'PictureFormatCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FullURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BaseURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PictureSetMember' =>
					array(
						'required' => false,
						'type' => 'PictureSetMemberType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'ExternalPictureURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UseByDate' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
