<?php
// autogenerated file 09.05.2012 13:08
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Requests current status of user token. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetTokenStatusRequestType.html
 *
 */
class GetTokenStatusRequestType extends AbstractRequestType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetTokenStatusRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
