<?php
// autogenerated file 22.07.2011 09:17
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the parts compatibility feature. If the field is present, the 
 * correspondingfeature applies to the site. The field is returned as an empty 
 * element (e.g., aboolean value is not returned).<br><br>Parts compatibility 
 * listings contain information to determine the assemblies withwhich a part is 
 * compatible. For example, an automotive part or accessory listedwitih parts 
 * compatibility can be matched with vehicles (e.g., specific years,makes, and 
 * models) with which the part or accessory can be used.<br><br>There are two ways 
 * to enter parts compatibility: by application and byspecification. <ul><li> 
 * Entering parts compatibility by application specifies the assemblies(e.g., a 
 * specific year, make, and model of car) to which the item applies. This canbe 
 * done automatically by listing with a catalog product that supports 
 * partscompatibility, or manually, using 
 * <bclass="con">Item.ItemCompatibilityList</b> when listing or revising anitem. 
 * </li><li>Entering parts compatibility by specification involves specifying 
 * thepart's relevant dimensions and characteristics necessary to determine 
 * theassemblies with which the part is compatible (e.g., Section Width, Aspect 
 * Ratio,Rim Diammeter, Load Index, and Speed Rating values for a tire) 
 * usingattributes.</li></ul><br><br> Parts Compatibility is supported in limited 
 * Parts & Accessoriescategories for the eBay Motors (US) site (site ID 100) only. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ItemCompatibilityEnabledDefinitionType.html
 *
 */
class ItemCompatibilityEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ItemCompatibilityEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
