<?php
// autogenerated file 29.12.2011 14:42
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Preferences that specify how eBay should handle certain requests that 
 * containinvalid data or that could partially fail. These preferences give you 
 * some controlover whether eBay returns warnings or errors in response to invalid 
 * data and howeBay handles listing requests when such data is passed in. For 
 * example, thesepreferences are applicable to AddItem and related calls when Item 
 * Specifics arespecified, and to CompleteSale. See the eBay Web Services Guidefor 
 * details about these preferences and their effects. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ErrorHandlingCodeType.html
 *
 * @property string Legacy
 * @property string BestEffort
 * @property string AllOrNothing
 * @property string FailOnError
 */
class ErrorHandlingCodeType extends EbatNs_FacetType
{
	const CodeType_Legacy = 'Legacy';
	const CodeType_BestEffort = 'BestEffort';
	const CodeType_AllOrNothing = 'AllOrNothing';
	const CodeType_FailOnError = 'FailOnError';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ErrorHandlingCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ErrorHandlingCodeType = new ErrorHandlingCodeType();

?>
