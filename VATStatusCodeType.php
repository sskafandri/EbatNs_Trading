<?php
// autogenerated file 22.07.2011 09:17
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Indicates whether or not the user is subject to VAT.Users who have registered 
 * with eBay as VAT-exempt are notsubject to VAT. See documentation on Value-Added 
 * Tax (VAT). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/VATStatusCodeType.html
 *
 * @property string NoVATTax
 * @property string VATTax
 * @property string VATExempt
 * @property string CustomCode
 */
class VATStatusCodeType extends EbatNs_FacetType
{
	const CodeType_NoVATTax = 'NoVATTax';
	const CodeType_VATTax = 'VATTax';
	const CodeType_VATExempt = 'VATExempt';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('VATStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_VATStatusCodeType = new VATStatusCodeType();

?>
