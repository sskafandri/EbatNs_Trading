<?php
// autogenerated file 09.05.2012 13:11
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Returned after calling SetStorePreferencesRequest. This serves as confirmation 
 * that the Store preferences were successfully submitted. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SetStorePreferencesResponseType.html
 *
 */
class SetStorePreferencesResponseType extends AbstractResponseType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SetStorePreferencesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
