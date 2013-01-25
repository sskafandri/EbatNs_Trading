<?php
// autogenerated file 09.05.2012 12:48
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * For the US, Canada and Australia sites, users registered after January 17,2007 
 * are required to offer at least one safe payment method (i.e. PayPal/PaisaPay, or 
 * one of the credit cards specified in Item.PaymentMethods).<br>If a seller has a 
 * 'SafePaymentExempt' status, they are exempt from the category requirement to 
 * offer at least one safe payment method when listing an item on a site that has 
 * the safe payment requirement.<br>The safe payment requirement also applies to 
 * two-category listings that have one ship-to or available-to location in the US, 
 * Canada, or Australia. The French Canadian (CAFR) site is a special case, because 
 * listings on the CAFR site with ship-to or available-to locations in Canada do 
 * not require a Safe Payment method, yet listings on the CAFR site with ship-to or 
 * available-to locations in the US or Australia do require a safe payment 
 * method.<br>The Business and Industrial, Motors, Real Estate, and Mature 
 * Audiences categories, and all listings that don't support Item.PaymentMethods 
 * are exempt from this requirement. Therefore, listings in those categories do not 
 * require a safe payment method.<br>Currently, this field contains no other 
 * special meta-data.(An empty element is returned.)<br> Use 
 * SiteDefaults.SafePaymentRequired and Category.SafePaymentRequired to determine 
 * which categories require a safe payment method. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SafePaymentRequiredDefinitionType.html
 *
 */
class SafePaymentRequiredDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SafePaymentRequiredDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
