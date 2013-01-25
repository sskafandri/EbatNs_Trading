<?php
// autogenerated file 10.09.2012 12:41
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'SuggestedCategoryArrayType.php';

/**
 * Returns a list of categories with the highest numberof listings whose titles or 
 * descriptions contain the keywordsspecified in a GetSuggestedCategoriesRequest. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetSuggestedCategoriesResponseType.html
 *
 */
class GetSuggestedCategoriesResponseType extends AbstractResponseType
{
	/**
	 * @var SuggestedCategoryArrayType
	 */
	protected $SuggestedCategoryArray;
	/**
	 * @var int
	 */
	protected $CategoryCount;

	/**
	 * @return SuggestedCategoryArrayType
	 */
	function getSuggestedCategoryArray()
	{
		return $this->SuggestedCategoryArray;
	}
	/**
	 * @return void
	 * @param SuggestedCategoryArrayType $value 
	 */
	function setSuggestedCategoryArray($value)
	{
		$this->SuggestedCategoryArray = $value;
	}
	/**
	 * @return int
	 */
	function getCategoryCount()
	{
		return $this->CategoryCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setCategoryCount($value)
	{
		$this->CategoryCount = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetSuggestedCategoriesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SuggestedCategoryArray' =>
					array(
						'required' => false,
						'type' => 'SuggestedCategoryArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryCount' =>
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
