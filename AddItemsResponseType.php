<?php
// autogenerated file 29.12.2011 14:18
// $Id: $
// $Log: $
//
//
require_once 'AddItemResponseContainerType.php';
require_once 'AbstractResponseType.php';

/**
 * Returns the item IDs and the estimated fees for the new listings, as well as the 
 * start and end times of the listings. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddItemsResponseType.html
 *
 */
class AddItemsResponseType extends AbstractResponseType
{
	/**
	 * @var AddItemResponseContainerType
	 */
	protected $AddItemResponseContainer;

	/**
	 * @return AddItemResponseContainerType
	 * @param integer $index 
	 */
	function getAddItemResponseContainer($index = null)
	{
		if ($index !== null) {
			return $this->AddItemResponseContainer[$index];
		} else {
			return $this->AddItemResponseContainer;
		}
	}
	/**
	 * @return void
	 * @param AddItemResponseContainerType $value 
	 * @param  $index 
	 */
	function setAddItemResponseContainer($value, $index = null)
	{
		if ($index !== null) {
			$this->AddItemResponseContainer[$index] = $value;
		} else {
			$this->AddItemResponseContainer = $value;
		}
	}
	/**
	 * @return void
	 * @param AddItemResponseContainerType $value 
	 */
	function addAddItemResponseContainer($value)
	{
		$this->AddItemResponseContainer[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AddItemsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'AddItemResponseContainer' =>
					array(
						'required' => false,
						'type' => 'AddItemResponseContainerType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
