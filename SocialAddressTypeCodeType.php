<?php
// autogenerated file 10.09.2012 12:49
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Enumerated type that defines the social networking sites that are supported by 
 * eBay GivingWorks. The supported social networking sites are listed below. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SocialAddressTypeCodeType.html
 *
 * @property string Facebook
 * @property string Twitter
 * @property string Linkedin
 * @property string GooglePlus
 * @property string Myspace
 * @property string Orkut
 * @property string CustomCode
 */
class SocialAddressTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Facebook = 'Facebook';
	const CodeType_Twitter = 'Twitter';
	const CodeType_Linkedin = 'Linkedin';
	const CodeType_GooglePlus = 'GooglePlus';
	const CodeType_Myspace = 'Myspace';
	const CodeType_Orkut = 'Orkut';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SocialAddressTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SocialAddressTypeCodeType = new SocialAddressTypeCodeType();

?>
