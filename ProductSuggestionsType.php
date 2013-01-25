<?php
// autogenerated file 10.09.2012 12:58
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ProductSuggestionType.php';

/**
 * Provides a list of products recommended by eBay, which match the item 
 * informationprovided by the seller. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ProductSuggestionsType.html
 *
 */
class ProductSuggestionsType extends EbatNs_ComplexType
{
	/**
	 * @var ProductSuggestionType
	 */
	protected $ProductSuggestion;

	/**
	 * @return ProductSuggestionType
	 * @param integer $index 
	 */
	function getProductSuggestion($index = null)
	{
		if ($index !== null) {
			return $this->ProductSuggestion[$index];
		} else {
			return $this->ProductSuggestion;
		}
	}
	/**
	 * @return void
	 * @param ProductSuggestionType $value 
	 * @param  $index 
	 */
	function setProductSuggestion($value, $index = null)
	{
		if ($index !== null) {
			$this->ProductSuggestion[$index] = $value;
		} else {
			$this->ProductSuggestion = $value;
		}
	}
	/**
	 * @return void
	 * @param ProductSuggestionType $value 
	 */
	function addProductSuggestion($value)
	{
		$this->ProductSuggestion[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ProductSuggestionsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ProductSuggestion' =>
					array(
						'required' => false,
						'type' => 'ProductSuggestionType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
