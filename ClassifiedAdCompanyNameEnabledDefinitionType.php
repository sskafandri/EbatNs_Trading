<?php
// autogenerated file 10.09.2012 12:44
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Indicates whether the category supports the use of a company name when 
 * contacting the seller for Classified Ad format listings.Added for the For Sale 
 * By Owner format. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ClassifiedAdCompanyNameEnabledDefinitionType.html
 *
 */
class ClassifiedAdCompanyNameEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ClassifiedAdCompanyNameEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
