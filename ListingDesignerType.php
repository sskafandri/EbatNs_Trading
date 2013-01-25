<?php
// autogenerated file 09.05.2012 13:00
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Contains the IDs for the Listing Designer theme and template (if either areused) 
 * associated with an item, which can optionally be used to enhance theappearance 
 * of the item's description. Cannot be used with Photo Display. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ListingDesignerType.html
 *
 */
class ListingDesignerType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $LayoutID;
	/**
	 * @var boolean
	 */
	protected $OptimalPictureSize;
	/**
	 * @var int
	 */
	protected $ThemeID;

	/**
	 * @return int
	 */
	function getLayoutID()
	{
		return $this->LayoutID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setLayoutID($value)
	{
		$this->LayoutID = $value;
	}
	/**
	 * @return boolean
	 */
	function getOptimalPictureSize()
	{
		return $this->OptimalPictureSize;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setOptimalPictureSize($value)
	{
		$this->OptimalPictureSize = $value;
	}
	/**
	 * @return int
	 */
	function getThemeID()
	{
		return $this->ThemeID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setThemeID($value)
	{
		$this->ThemeID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ListingDesignerType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'LayoutID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'OptimalPictureSize' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ThemeID' =>
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
