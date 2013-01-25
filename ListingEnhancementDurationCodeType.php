<?php
// autogenerated file 29.12.2011 14:54
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Applications should not depend on the completeness of 
 * ListingEnhancementDurationCodeType.GetCategoryFeatures will return the complete 
 * list of feature durations for each featurethat they pertain to.Each code in this 
 * code list specifies a number of days that a listing feature can beactive (i.e., 
 * available to increase exposure in search). The validity of a codedepends on the 
 * listing site and feature.Call GetCategoryFeatures to determine which listing 
 * featuressupport each duration for the site you are using. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ListingEnhancementDurationCodeType.html
 *
 * @property string Days_1
 * @property string Days_2
 * @property string Days_3
 * @property string Days_4
 * @property string Days_5
 * @property string Days_6
 * @property string Days_7
 * @property string Days_8
 * @property string Days_9
 * @property string Days_10
 * @property string Days_11
 * @property string Days_12
 * @property string Days_13
 * @property string Days_14
 * @property string Days_15
 * @property string Days_16
 * @property string Days_17
 * @property string Days_18
 * @property string Days_19
 * @property string Days_20
 * @property string Days_21
 * @property string Days_22
 * @property string Days_23
 * @property string Days_24
 * @property string Days_25
 * @property string Days_26
 * @property string Days_27
 * @property string Days_28
 * @property string Days_29
 * @property string Days_30
 * @property string Days_31
 * @property string Days_32
 * @property string Days_33
 * @property string Days_34
 * @property string Days_35
 * @property string Days_36
 * @property string Days_37
 * @property string Days_38
 * @property string Days_39
 * @property string Days_40
 * @property string Days_41
 * @property string Days_42
 * @property string Days_43
 * @property string Days_44
 * @property string Days_45
 * @property string Days_46
 * @property string Days_47
 * @property string Days_48
 * @property string Days_49
 * @property string Days_50
 * @property string Lifetime
 * @property string CustomCode
 */
class ListingEnhancementDurationCodeType extends EbatNs_FacetType
{
	const CodeType_Days_1 = 'Days_1';
	const CodeType_Days_2 = 'Days_2';
	const CodeType_Days_3 = 'Days_3';
	const CodeType_Days_4 = 'Days_4';
	const CodeType_Days_5 = 'Days_5';
	const CodeType_Days_6 = 'Days_6';
	const CodeType_Days_7 = 'Days_7';
	const CodeType_Days_8 = 'Days_8';
	const CodeType_Days_9 = 'Days_9';
	const CodeType_Days_10 = 'Days_10';
	const CodeType_Days_11 = 'Days_11';
	const CodeType_Days_12 = 'Days_12';
	const CodeType_Days_13 = 'Days_13';
	const CodeType_Days_14 = 'Days_14';
	const CodeType_Days_15 = 'Days_15';
	const CodeType_Days_16 = 'Days_16';
	const CodeType_Days_17 = 'Days_17';
	const CodeType_Days_18 = 'Days_18';
	const CodeType_Days_19 = 'Days_19';
	const CodeType_Days_20 = 'Days_20';
	const CodeType_Days_21 = 'Days_21';
	const CodeType_Days_22 = 'Days_22';
	const CodeType_Days_23 = 'Days_23';
	const CodeType_Days_24 = 'Days_24';
	const CodeType_Days_25 = 'Days_25';
	const CodeType_Days_26 = 'Days_26';
	const CodeType_Days_27 = 'Days_27';
	const CodeType_Days_28 = 'Days_28';
	const CodeType_Days_29 = 'Days_29';
	const CodeType_Days_30 = 'Days_30';
	const CodeType_Days_31 = 'Days_31';
	const CodeType_Days_32 = 'Days_32';
	const CodeType_Days_33 = 'Days_33';
	const CodeType_Days_34 = 'Days_34';
	const CodeType_Days_35 = 'Days_35';
	const CodeType_Days_36 = 'Days_36';
	const CodeType_Days_37 = 'Days_37';
	const CodeType_Days_38 = 'Days_38';
	const CodeType_Days_39 = 'Days_39';
	const CodeType_Days_40 = 'Days_40';
	const CodeType_Days_41 = 'Days_41';
	const CodeType_Days_42 = 'Days_42';
	const CodeType_Days_43 = 'Days_43';
	const CodeType_Days_44 = 'Days_44';
	const CodeType_Days_45 = 'Days_45';
	const CodeType_Days_46 = 'Days_46';
	const CodeType_Days_47 = 'Days_47';
	const CodeType_Days_48 = 'Days_48';
	const CodeType_Days_49 = 'Days_49';
	const CodeType_Days_50 = 'Days_50';
	const CodeType_Lifetime = 'Lifetime';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ListingEnhancementDurationCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ListingEnhancementDurationCodeType = new ListingEnhancementDurationCodeType();

?>
