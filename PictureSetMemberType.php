<?php
// autogenerated file 09.05.2012 12:48
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * URL and size information for each generated and stored size.This data is 
 * provided for use in application previews of pictures.This data is used for 
 * display control for specific pictures in the generated imageset.This container 
 * is supplied for all generated pictures. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PictureSetMemberType.html
 *
 */
class PictureSetMemberType extends EbatNs_ComplexType
{
	/**
	 * @var anyURI
	 */
	protected $MemberURL;
	/**
	 * @var int
	 */
	protected $PictureHeight;
	/**
	 * @var int
	 */
	protected $PictureWidth;

	/**
	 * @return anyURI
	 */
	function getMemberURL()
	{
		return $this->MemberURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setMemberURL($value)
	{
		$this->MemberURL = $value;
	}
	/**
	 * @return int
	 */
	function getPictureHeight()
	{
		return $this->PictureHeight;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPictureHeight($value)
	{
		$this->PictureHeight = $value;
	}
	/**
	 * @return int
	 */
	function getPictureWidth()
	{
		return $this->PictureWidth;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPictureWidth($value)
	{
		$this->PictureWidth = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PictureSetMemberType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'MemberURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PictureHeight' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PictureWidth' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
