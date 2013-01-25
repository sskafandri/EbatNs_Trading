<?php
// autogenerated file 09.05.2012 13:11
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * SecondChanceOfferDurationCodeType - Type declaration to be used by other 
 * schema.Specifies the number of days the second chance offer active. The 
 * recipient biddermust purchase the item within that time or the listing expires. 
 * The duration for anew second chance offer listing is limited to these values. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SecondChanceOfferDurationCodeType.html
 *
 * @property string Days_1
 * @property string Days_3
 * @property string Days_5
 * @property string Days_7
 * @property string CustomCode
 */
class SecondChanceOfferDurationCodeType extends EbatNs_FacetType
{
	const CodeType_Days_1 = 'Days_1';
	const CodeType_Days_3 = 'Days_3';
	const CodeType_Days_5 = 'Days_5';
	const CodeType_Days_7 = 'Days_7';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SecondChanceOfferDurationCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SecondChanceOfferDurationCodeType = new SecondChanceOfferDurationCodeType();

?>
