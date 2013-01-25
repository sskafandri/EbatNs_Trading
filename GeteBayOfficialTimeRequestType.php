<?php
// autogenerated file 10.09.2012 12:44
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Gets the official eBay system time in GMT. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GeteBayOfficialTimeRequestType.html
 *
 */
class GeteBayOfficialTimeRequestType extends AbstractRequestType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GeteBayOfficialTimeRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
