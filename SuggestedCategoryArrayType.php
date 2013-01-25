<?php
// autogenerated file 29.12.2011 14:42
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'SuggestedCategoryType.php';

/**
 * Contains an array of categories that contain listings withspecified keywords in 
 * their titles or descriptions. The arraycan contain up to 10 categories. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SuggestedCategoryArrayType.html
 *
 */
class SuggestedCategoryArrayType extends EbatNs_ComplexType
{
	/**
	 * @var SuggestedCategoryType
	 */
	protected $SuggestedCategory;

	/**
	 * @return SuggestedCategoryType
	 * @param integer $index 
	 */
	function getSuggestedCategory($index = null)
	{
		if ($index !== null) {
			return $this->SuggestedCategory[$index];
		} else {
			return $this->SuggestedCategory;
		}
	}
	/**
	 * @return void
	 * @param SuggestedCategoryType $value 
	 * @param  $index 
	 */
	function setSuggestedCategory($value, $index = null)
	{
		if ($index !== null) {
			$this->SuggestedCategory[$index] = $value;
		} else {
			$this->SuggestedCategory = $value;
		}
	}
	/**
	 * @return void
	 * @param SuggestedCategoryType $value 
	 */
	function addSuggestedCategory($value)
	{
		$this->SuggestedCategory[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SuggestedCategoryArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SuggestedCategory' =>
					array(
						'required' => false,
						'type' => 'SuggestedCategoryType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
