<?php
// autogenerated file 09.05.2012 13:08
// $Id: $
// $Log: $
//
//
require_once 'EndItemRequestContainerType.php';
require_once 'AbstractRequestType.php';

/**
 * Ends up to 10 specified item listings before the date and time at which it would 
 * normally end per the listing duration.&nbsp;<b>Also for Half.com</b>. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/EndItemsRequestType.html
 *
 */
class EndItemsRequestType extends AbstractRequestType
{
	/**
	 * @var EndItemRequestContainerType
	 */
	protected $EndItemRequestContainer;

	/**
	 * @return EndItemRequestContainerType
	 * @param integer $index 
	 */
	function getEndItemRequestContainer($index = null)
	{
		if ($index !== null) {
			return $this->EndItemRequestContainer[$index];
		} else {
			return $this->EndItemRequestContainer;
		}
	}
	/**
	 * @return void
	 * @param EndItemRequestContainerType $value 
	 * @param  $index 
	 */
	function setEndItemRequestContainer($value, $index = null)
	{
		if ($index !== null) {
			$this->EndItemRequestContainer[$index] = $value;
		} else {
			$this->EndItemRequestContainer = $value;
		}
	}
	/**
	 * @return void
	 * @param EndItemRequestContainerType $value 
	 */
	function addEndItemRequestContainer($value)
	{
		$this->EndItemRequestContainer[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('EndItemsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'EndItemRequestContainer' =>
					array(
						'required' => false,
						'type' => 'EndItemRequestContainerType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
