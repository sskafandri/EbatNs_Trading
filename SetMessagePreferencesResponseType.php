<?php
// autogenerated file 10.09.2012 12:44
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Returns the success or failure of theSetMessagePreferencesRequest, and any 
 * applicable errors. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SetMessagePreferencesResponseType.html
 *
 */
class SetMessagePreferencesResponseType extends AbstractResponseType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SetMessagePreferencesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
