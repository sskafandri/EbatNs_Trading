<?php
// autogenerated file 09.05.2012 13:00
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves the current list of eBay store configuration settings. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetStoreOptionsRequestType.html
 *
 */
class GetStoreOptionsRequestType extends AbstractRequestType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetStoreOptionsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
