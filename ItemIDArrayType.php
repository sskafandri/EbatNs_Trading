<?php
// autogenerated file 09.05.2012 13:08
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ItemIDType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ItemIDArrayType.html
 *
 */
class ItemIDArrayType extends EbatNs_ComplexType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;

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
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ItemIDArrayType', 'urn:ebay:apis:eBLBaseComponents');
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
					)
				));
	}
}
?>
