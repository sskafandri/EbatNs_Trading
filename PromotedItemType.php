<?php
// autogenerated file 22.07.2011 08:57
// $Id: $
// $Log: $
//
//
require_once 'ListingTypeCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'PromotionItemSelectionCodeType.php';
require_once 'PromotionDetailsType.php';
require_once 'ItemIDType.php';

/**
 * Contains the data describing one cross-promoted item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PromotedItemType.html
 *
 */
class PromotedItemType extends EbatNs_ComplexType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var string
	 */
	protected $PictureURL;
	/**
	 * @var int
	 */
	protected $Position;
	/**
	 * @var PromotionItemSelectionCodeType
	 */
	protected $SelectionType;
	/**
	 * @var string
	 */
	protected $Title;
	/**
	 * @var ListingTypeCodeType
	 */
	protected $ListingType;
	/**
	 * @var PromotionDetailsType
	 */
	protected $PromotionDetails;
	/**
	 * @var duration
	 */
	protected $TimeLeft;

	/**
	 * @return ItemIDType
	 */
	function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
	/**
	 * @return string
	 */
	function getPictureURL()
	{
		return $this->PictureURL;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPictureURL($value)
	{
		$this->PictureURL = $value;
	}
	/**
	 * @return int
	 */
	function getPosition()
	{
		return $this->Position;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPosition($value)
	{
		$this->Position = $value;
	}
	/**
	 * @return PromotionItemSelectionCodeType
	 */
	function getSelectionType()
	{
		return $this->SelectionType;
	}
	/**
	 * @return void
	 * @param PromotionItemSelectionCodeType $value 
	 */
	function setSelectionType($value)
	{
		$this->SelectionType = $value;
	}
	/**
	 * @return string
	 */
	function getTitle()
	{
		return $this->Title;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTitle($value)
	{
		$this->Title = $value;
	}
	/**
	 * @return ListingTypeCodeType
	 */
	function getListingType()
	{
		return $this->ListingType;
	}
	/**
	 * @return void
	 * @param ListingTypeCodeType $value 
	 */
	function setListingType($value)
	{
		$this->ListingType = $value;
	}
	/**
	 * @return PromotionDetailsType
	 * @param integer $index 
	 */
	function getPromotionDetails($index = null)
	{
		if ($index !== null) {
			return $this->PromotionDetails[$index];
		} else {
			return $this->PromotionDetails;
		}
	}
	/**
	 * @return void
	 * @param PromotionDetailsType $value 
	 * @param  $index 
	 */
	function setPromotionDetails($value, $index = null)
	{
		if ($index !== null) {
			$this->PromotionDetails[$index] = $value;
		} else {
			$this->PromotionDetails = $value;
		}
	}
	/**
	 * @return void
	 * @param PromotionDetailsType $value 
	 */
	function addPromotionDetails($value)
	{
		$this->PromotionDetails[] = $value;
	}
	/**
	 * @return duration
	 */
	function getTimeLeft()
	{
		return $this->TimeLeft;
	}
	/**
	 * @return void
	 * @param duration $value 
	 */
	function setTimeLeft($value)
	{
		$this->TimeLeft = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PromotedItemType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PictureURL' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Position' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SelectionType' =>
					array(
						'required' => false,
						'type' => 'PromotionItemSelectionCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Title' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ListingType' =>
					array(
						'required' => false,
						'type' => 'ListingTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PromotionDetails' =>
					array(
						'required' => false,
						'type' => 'PromotionDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'TimeLeft' =>
					array(
						'required' => false,
						'type' => 'duration',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
