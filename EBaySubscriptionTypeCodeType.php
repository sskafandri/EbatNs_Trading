<?php
// autogenerated file 22.07.2011 08:57
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/EBaySubscriptionTypeCodeType.html
 *
 * @property string SellerAssistant
 * @property string SellerAssistantPro
 * @property string EBayStoreBasic
 * @property string EBayStoreFeatured
 * @property string EBayStoreAnchor
 * @property string SellingManager
 * @property string SellingManagerPro
 * @property string PictureManagerLevel1
 * @property string PictureManagerLevel2
 * @property string PictureManagerLevel3
 * @property string PictureManagerLevel4
 * @property string PictureManagerLevel5
 * @property string PictureManagerLevel6
 * @property string PictureManagerLevel7
 * @property string SellerReportsBasic
 * @property string SellerReportsPlus
 * @property string FileExchange
 * @property string LocalMarketSpecialty
 * @property string LocalMarketRegular
 * @property string LocalMarketPremium
 * @property string CustomCode
 */
class EBaySubscriptionTypeCodeType extends EbatNs_FacetType
{
	const CodeType_SellerAssistant = 'SellerAssistant';
	const CodeType_SellerAssistantPro = 'SellerAssistantPro';
	const CodeType_EBayStoreBasic = 'EBayStoreBasic';
	const CodeType_EBayStoreFeatured = 'EBayStoreFeatured';
	const CodeType_EBayStoreAnchor = 'EBayStoreAnchor';
	const CodeType_SellingManager = 'SellingManager';
	const CodeType_SellingManagerPro = 'SellingManagerPro';
	const CodeType_PictureManagerLevel1 = 'PictureManagerLevel1';
	const CodeType_PictureManagerLevel2 = 'PictureManagerLevel2';
	const CodeType_PictureManagerLevel3 = 'PictureManagerLevel3';
	const CodeType_PictureManagerLevel4 = 'PictureManagerLevel4';
	const CodeType_PictureManagerLevel5 = 'PictureManagerLevel5';
	const CodeType_PictureManagerLevel6 = 'PictureManagerLevel6';
	const CodeType_PictureManagerLevel7 = 'PictureManagerLevel7';
	const CodeType_SellerReportsBasic = 'SellerReportsBasic';
	const CodeType_SellerReportsPlus = 'SellerReportsPlus';
	const CodeType_FileExchange = 'FileExchange';
	const CodeType_LocalMarketSpecialty = 'LocalMarketSpecialty';
	const CodeType_LocalMarketRegular = 'LocalMarketRegular';
	const CodeType_LocalMarketPremium = 'LocalMarketPremium';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('EBaySubscriptionTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_EBaySubscriptionTypeCodeType = new EBaySubscriptionTypeCodeType();

?>
