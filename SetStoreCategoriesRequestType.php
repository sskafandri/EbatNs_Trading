<?php
// autogenerated file 10.09.2012 12:58
// $Id: $
// $Log: $
//
//
require_once 'StoreCategoryUpdateActionCodeType.php';
require_once 'StoreCustomCategoryArrayType.php';
require_once 'AbstractRequestType.php';

/**
 * Changes the category structure of an eBay store. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SetStoreCategoriesRequestType.html
 *
 */
class SetStoreCategoriesRequestType extends AbstractRequestType
{
	/**
	 * @var StoreCategoryUpdateActionCodeType
	 */
	protected $Action;
	/**
	 * @var long
	 */
	protected $ItemDestinationCategoryID;
	/**
	 * @var long
	 */
	protected $DestinationParentCategoryID;
	/**
	 * @var StoreCustomCategoryArrayType
	 */
	protected $StoreCategories;

	/**
	 * @return StoreCategoryUpdateActionCodeType
	 */
	function getAction()
	{
		return $this->Action;
	}
	/**
	 * @return void
	 * @param StoreCategoryUpdateActionCodeType $value 
	 */
	function setAction($value)
	{
		$this->Action = $value;
	}
	/**
	 * @return long
	 */
	function getItemDestinationCategoryID()
	{
		return $this->ItemDestinationCategoryID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setItemDestinationCategoryID($value)
	{
		$this->ItemDestinationCategoryID = $value;
	}
	/**
	 * @return long
	 */
	function getDestinationParentCategoryID()
	{
		return $this->DestinationParentCategoryID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setDestinationParentCategoryID($value)
	{
		$this->DestinationParentCategoryID = $value;
	}
	/**
	 * @return StoreCustomCategoryArrayType
	 */
	function getStoreCategories()
	{
		return $this->StoreCategories;
	}
	/**
	 * @return void
	 * @param StoreCustomCategoryArrayType $value 
	 */
	function setStoreCategories($value)
	{
		$this->StoreCategories = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SetStoreCategoriesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Action' =>
					array(
						'required' => false,
						'type' => 'StoreCategoryUpdateActionCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemDestinationCategoryID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DestinationParentCategoryID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StoreCategories' =>
					array(
						'required' => false,
						'type' => 'StoreCustomCategoryArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
