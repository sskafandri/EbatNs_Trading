<?php
// autogenerated file 09.05.2012 13:04
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the UserConsentRequired feature. If the field is present, the 
 * corresponding feature applies to the category. The field is returned as an empty 
 * element (i.e., a boolean value is not returned). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/UserConsentRequiredDefinitionType.html
 *
 */
class UserConsentRequiredDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('UserConsentRequiredDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
