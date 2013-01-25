<?php
// autogenerated file 10.09.2012 12:44
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves Selling Manager alerts.This call is subject to change without notice; 
 * the deprecation process isinapplicable to this call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetSellingManagerAlertsRequestType.html
 *
 */
class GetSellingManagerAlertsRequestType extends AbstractRequestType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetSellingManagerAlertsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
