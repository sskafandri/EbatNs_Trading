<?php
// autogenerated file 22.07.2011 09:17
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Identifies a shipping carrier. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ShippingCarrierCodeType.html
 *
 * @property string UPS
 * @property string USPS
 * @property string FedEx
 * @property string DeutschePost
 * @property string DHL
 * @property string Hermes
 * @property string iLoxx
 * @property string Other
 * @property string ColiposteDomestic
 * @property string ColiposteInternational
 * @property string Chronopost
 * @property string Correos
 * @property string Seur
 * @property string Nacex
 * @property string CustomCode
 */
class ShippingCarrierCodeType extends EbatNs_FacetType
{
	const CodeType_UPS = 'UPS';
	const CodeType_USPS = 'USPS';
	const CodeType_FedEx = 'FedEx';
	const CodeType_DeutschePost = 'DeutschePost';
	const CodeType_DHL = 'DHL';
	const CodeType_Hermes = 'Hermes';
	const CodeType_iLoxx = 'iLoxx';
	const CodeType_Other = 'Other';
	const CodeType_ColiposteDomestic = 'ColiposteDomestic';
	const CodeType_ColiposteInternational = 'ColiposteInternational';
	const CodeType_Chronopost = 'Chronopost';
	const CodeType_Correos = 'Correos';
	const CodeType_Seur = 'Seur';
	const CodeType_Nacex = 'Nacex';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ShippingCarrierCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ShippingCarrierCodeType = new ShippingCarrierCodeType();

?>
