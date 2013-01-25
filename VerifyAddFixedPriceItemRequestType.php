<?php
// autogenerated file 15.11.2010 08:34
// $Id: $
// $Log: $
//
//
require_once 'ItemType.php';
require_once 'AbstractRequestType.php';

/**
 * Enables a seller to test the definition of a new fixed-price listing 
 * bysubmitting the definition to eBay without creating a actual listing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/VerifyAddFixedPriceItemRequestType.html
 *
 */
class VerifyAddFixedPriceItemRequestType extends AbstractRequestType
{
	/**
	 * @var ItemType
	 */
	protected $Item;

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
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('VerifyAddFixedPriceItemRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Item' =>
					array(
						'required' => false,
						'type' => 'ItemType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
