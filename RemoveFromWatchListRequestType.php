<?php
// autogenerated file 09.05.2012 13:00
// $Id: $
// $Log: $
//
//
require_once 'VariationKeyType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Enables a user to remove one or more items from their My eBay watch list. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RemoveFromWatchListRequestType.html
 *
 */
class RemoveFromWatchListRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var boolean
	 */
	protected $RemoveAllItems;
	/**
	 * @var VariationKeyType
	 */
	protected $VariationKey;

	/**
	 * @return ItemIDType
	 * @param integer $index 
	 */
	function getItemID($index = null)
	{
		if ($index !== null) {
			return $this->ItemID[$index];
		} else {
			return $this->ItemID;
		}
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 * @param  $index 
	 */
	function setItemID($value, $index = null)
	{
		if ($index !== null) {
			$this->ItemID[$index] = $value;
		} else {
			$this->ItemID = $value;
		}
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function addItemID($value)
	{
		$this->ItemID[] = $value;
	}
	/**
	 * @return boolean
	 */
	function getRemoveAllItems()
	{
		return $this->RemoveAllItems;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setRemoveAllItems($value)
	{
		$this->RemoveAllItems = $value;
	}
	/**
	 * @return VariationKeyType
	 * @param integer $index 
	 */
	function getVariationKey($index = null)
	{
		if ($index !== null) {
			return $this->VariationKey[$index];
		} else {
			return $this->VariationKey;
		}
	}
	/**
	 * @return void
	 * @param VariationKeyType $value 
	 * @param  $index 
	 */
	function setVariationKey($value, $index = null)
	{
		if ($index !== null) {
			$this->VariationKey[$index] = $value;
		} else {
			$this->VariationKey = $value;
		}
	}
	/**
	 * @return void
	 * @param VariationKeyType $value 
	 */
	function addVariationKey($value)
	{
		$this->VariationKey[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RemoveFromWatchListRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'RemoveAllItems' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'VariationKey' =>
					array(
						'required' => false,
						'type' => 'VariationKeyType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
