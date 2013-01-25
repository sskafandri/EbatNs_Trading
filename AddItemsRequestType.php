<?php
// autogenerated file 09.05.2012 13:00
// $Id: $
// $Log: $
//
//
require_once 'AddItemRequestContainerType.php';
require_once 'AbstractRequestType.php';

/**
 * Defines from one to five items and lists them on a specified eBay site. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddItemsRequestType.html
 *
 */
class AddItemsRequestType extends AbstractRequestType
{
	/**
	 * @var AddItemRequestContainerType
	 */
	protected $AddItemRequestContainer;

	/**
	 * @return AddItemRequestContainerType
	 * @param integer $index 
	 */
	function getAddItemRequestContainer($index = null)
	{
		if ($index !== null) {
			return $this->AddItemRequestContainer[$index];
		} else {
			return $this->AddItemRequestContainer;
		}
	}
	/**
	 * @return void
	 * @param AddItemRequestContainerType $value 
	 * @param  $index 
	 */
	function setAddItemRequestContainer($value, $index = null)
	{
		if ($index !== null) {
			$this->AddItemRequestContainer[$index] = $value;
		} else {
			$this->AddItemRequestContainer = $value;
		}
	}
	/**
	 * @return void
	 * @param AddItemRequestContainerType $value 
	 */
	function addAddItemRequestContainer($value)
	{
		$this->AddItemRequestContainer[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AddItemsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'AddItemRequestContainer' =>
					array(
						'required' => false,
						'type' => 'AddItemRequestContainerType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
