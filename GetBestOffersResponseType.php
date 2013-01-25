<?php
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'BestOfferArrayType.php';
require_once 'ItemBestOffersArrayType.php';
require_once 'AbstractResponseType.php';
require_once 'PaginationResultType.php';
require_once 'ItemType.php';

/**
 * All best offers for the item according to the filter or best offerid (or both) 
 * used in the input.For the notification client usage, this response includes 
 * asingle Best Offer. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetBestOffersResponseType.html
 *
 */
class GetBestOffersResponseType extends AbstractResponseType
{
	/**
	 * @var BestOfferArrayType
	 */
	protected $BestOfferArray;
	/**
	 * @var ItemType
	 */
	protected $Item;
	/**
	 * @var ItemBestOffersArrayType
	 */
	protected $ItemBestOffersArray;
	/**
	 * @var int
	 */
	protected $PageNumber;
	/**
	 * @var PaginationResultType
	 */
	protected $PaginationResult;

	/**
	 * @return BestOfferArrayType
	 */
	function getBestOfferArray()
	{
		return $this->BestOfferArray;
	}
	/**
	 * @return void
	 * @param BestOfferArrayType $value 
	 */
	function setBestOfferArray($value)
	{
		$this->BestOfferArray = $value;
	}
	/**
	 * @return ItemType
	 */
	function getItem()
	{
		return $this->Item;
	}
	/**
	 * @return void
	 * @param ItemType $value 
	 */
	function setItem($value)
	{
		$this->Item = $value;
	}
	/**
	 * @return ItemBestOffersArrayType
	 */
	function getItemBestOffersArray()
	{
		return $this->ItemBestOffersArray;
	}
	/**
	 * @return void
	 * @param ItemBestOffersArrayType $value 
	 */
	function setItemBestOffersArray($value)
	{
		$this->ItemBestOffersArray = $value;
	}
	/**
	 * @return int
	 */
	function getPageNumber()
	{
		return $this->PageNumber;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPageNumber($value)
	{
		$this->PageNumber = $value;
	}
	/**
	 * @return PaginationResultType
	 */
	function getPaginationResult()
	{
		return $this->PaginationResult;
	}
	/**
	 * @return void
	 * @param PaginationResultType $value 
	 */
	function setPaginationResult($value)
	{
		$this->PaginationResult = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetBestOffersResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'BestOfferArray' =>
					array(
						'required' => false,
						'type' => 'BestOfferArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Item' =>
					array(
						'required' => false,
						'type' => 'ItemType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemBestOffersArray' =>
					array(
						'required' => false,
						'type' => 'ItemBestOffersArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PageNumber' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PaginationResult' =>
					array(
						'required' => false,
						'type' => 'PaginationResultType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
