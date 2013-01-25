<?php
// autogenerated file 22.07.2011 09:17
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Defines the type of treatment applied to a discounted item,either Strike-Through 
 * Pricing or Minimum Advertised Price. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PricingTreatmentCodeType.html
 *
 * @property string STP
 * @property string MAP
 * @property string None
 * @property string CustomCode
 */
class PricingTreatmentCodeType extends EbatNs_FacetType
{
	const CodeType_STP = 'STP';
	const CodeType_MAP = 'MAP';
	const CodeType_None = 'None';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PricingTreatmentCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PricingTreatmentCodeType = new PricingTreatmentCodeType();

?>