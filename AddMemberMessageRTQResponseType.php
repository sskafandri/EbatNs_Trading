<?php
// autogenerated file 22.07.2011 09:17
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Response to AddMemberMessageRTQ request. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddMemberMessageRTQResponseType.html
 *
 */
class AddMemberMessageRTQResponseType extends AbstractResponseType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AddMemberMessageRTQResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
