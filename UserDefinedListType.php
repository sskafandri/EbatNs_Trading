<?php
// autogenerated file 15.11.2010 08:34
// $Id: $
// $Log: $
//
//
require_once 'ItemArrayType.php';
require_once 'MyeBayFavoriteSellerListType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'MyeBayFavoriteSearchListType.php';

/**
 * Contains the items, searches and sellers that the user has saved to this list 
 * using the "Add to list" feature. The name of the list is given by the "Name" 
 * element. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/UserDefinedListType.html
 *
 */
class UserDefinedListType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $Name;
	/**
	 * @var ItemArrayType
	 */
	protected $ItemArray;
	/**
	 * @var MyeBayFavoriteSearchListType
	 */
	protected $FavoriteSearches;
	/**
	 * @var MyeBayFavoriteSellerListType
	 */
	protected $FavoriteSellers;

	/**
	 * @return string
	 */
	function getName()
	{
		return $this->Name;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setName($value)
	{
		$this->Name = $value;
	}
	/**
	 * @return ItemArrayType
	 */
	function getItemArray()
	{
		return $this->ItemArray;
	}
	/**
	 * @return void
	 * @param ItemArrayType $value 
	 */
	function setItemArray($value)
	{
		$this->ItemArray = $value;
	}
	/**
	 * @return MyeBayFavoriteSearchListType
	 */
	function getFavoriteSearches()
	{
		return $this->FavoriteSearches;
	}
	/**
	 * @return void
	 * @param MyeBayFavoriteSearchListType $value 
	 */
	function setFavoriteSearches($value)
	{
		$this->FavoriteSearches = $value;
	}
	/**
	 * @return MyeBayFavoriteSellerListType
	 */
	function getFavoriteSellers()
	{
		return $this->FavoriteSellers;
	}
	/**
	 * @return void
	 * @param MyeBayFavoriteSellerListType $value 
	 */
	function setFavoriteSellers($value)
	{
		$this->FavoriteSellers = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('UserDefinedListType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Name' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemArray' =>
					array(
						'required' => false,
						'type' => 'ItemArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FavoriteSearches' =>
					array(
						'required' => false,
						'type' => 'MyeBayFavoriteSearchListType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FavoriteSellers' =>
					array(
						'required' => false,
						'type' => 'MyeBayFavoriteSellerListType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
