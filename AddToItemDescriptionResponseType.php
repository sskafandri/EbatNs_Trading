<?php
// autogenerated file 22.07.2011 08:57
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Indicates the success or failure of the attempt to add text to the end of 
 * thedescription section of an item listing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddToItemDescriptionResponseType.html
 *
 */
class AddToItemDescriptionResponseType extends AbstractResponseType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AddToItemDescriptionResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
