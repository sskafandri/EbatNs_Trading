<?php
// autogenerated file 09.05.2012 13:19
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'SiteIDFilterCodeType.php';

/**
 * Contains the data that defines a site-based filter (used when searching for 
 * items and filtering the search result set). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SiteLocationType.html
 *
 */
class SiteLocationType extends EbatNs_ComplexType
{
	/**
	 * @var SiteIDFilterCodeType
	 */
	protected $SiteID;

	/**
	 * @return SiteIDFilterCodeType
	 */
	function getSiteID()
	{
		return $this->SiteID;
	}
	/**
	 * @return void
	 * @param SiteIDFilterCodeType $value 
	 */
	function setSiteID($value)
	{
		$this->SiteID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SiteLocationType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SiteID' =>
					array(
						'required' => false,
						'type' => 'SiteIDFilterCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
