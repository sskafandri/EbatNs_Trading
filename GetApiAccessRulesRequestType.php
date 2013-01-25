<?php
// autogenerated file 22.07.2011 08:53
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Reports how many calls your application has made and is allowed to make per hour 
 * or day.&nbsp;<b>Also for Half.com</b>. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetApiAccessRulesRequestType.html
 *
 */
class GetApiAccessRulesRequestType extends AbstractRequestType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetApiAccessRulesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
