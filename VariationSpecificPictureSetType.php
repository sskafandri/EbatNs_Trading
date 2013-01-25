<?php
// autogenerated file 09.05.2012 13:19
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * At least one container is required (minOccurs="1") if Pictures container is 
 * present in the request. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/VariationSpecificPictureSetType.html
 *
 */
class VariationSpecificPictureSetType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $VariationSpecificValue;
	/**
	 * @var anyURI
	 */
	protected $PictureURL;
	/**
	 * @var anyURI
	 */
	protected $GalleryURL;
	/**
	 * @var anyURI
	 */
	protected $ExternalPictureURL;

	/**
	 * @return string
	 */
	function getVariationSpecificValue()
	{
		return $this->VariationSpecificValue;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setVariationSpecificValue($value)
	{
		$this->VariationSpecificValue = $value;
	}
	/**
	 * @return anyURI
	 * @param integer $index 
	 */
	function getPictureURL($index = null)
	{
		if ($index !== null) {
			return $this->PictureURL[$index];
		} else {
			return $this->PictureURL;
		}
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 * @param  $index 
	 */
	function setPictureURL($value, $index = null)
	{
		if ($index !== null) {
			$this->PictureURL[$index] = $value;
		} else {
			$this->PictureURL = $value;
		}
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function addPictureURL($value)
	{
		$this->PictureURL[] = $value;
	}
	/**
	 * @return anyURI
	 */
	function getGalleryURL()
	{
		return $this->GalleryURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setGalleryURL($value)
	{
		$this->GalleryURL = $value;
	}
	/**
	 * @return anyURI
	 * @param integer $index 
	 */
	function getExternalPictureURL($index = null)
	{
		if ($index !== null) {
			return $this->ExternalPictureURL[$index];
		} else {
			return $this->ExternalPictureURL;
		}
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 * @param  $index 
	 */
	function setExternalPictureURL($value, $index = null)
	{
		if ($index !== null) {
			$this->ExternalPictureURL[$index] = $value;
		} else {
			$this->ExternalPictureURL = $value;
		}
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function addExternalPictureURL($value)
	{
		$this->ExternalPictureURL[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('VariationSpecificPictureSetType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'VariationSpecificValue' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PictureURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'GalleryURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ExternalPictureURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
