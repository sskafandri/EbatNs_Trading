<?php
// autogenerated file 29.12.2011 14:54
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * This type defines the International Standard Book Number (ISBN) feature, and 
 * whetherthis feature is enabled at the site level. An empty 
 * ISBNIdentifierEnabledfield is returned under the FeatureDefinitions container in 
 * GetCategoryFeaturesif the feature is applicable to the site and if 
 * ISBNIdentifierEnabled ispassed in as a FeatureID (or if no FeatureID is passed 
 * in, hence all features arereturned). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ISBNIdentifierEnabledDefinitionType.html
 *
 */
class ISBNIdentifierEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ISBNIdentifierEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
