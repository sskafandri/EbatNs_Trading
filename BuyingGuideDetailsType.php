<?php
// autogenerated file 10.09.2012 12:58
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'BuyingGuideType.php';

/**
 * Information about zero or more buying guides and the site's buying guide 
 * hub.Buying guides contain content about particular product areas, categories, or 
 * subjectsto help buyers decide which type of item to purchase based on their 
 * particular interests.Multiple buying guides can be returned. See the eBay Web 
 * Services Guide for additional information. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BuyingGuideDetailsType.html
 *
 */
class BuyingGuideDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var BuyingGuideType
	 */
	protected $BuyingGuide;
	/**
	 * @var anyURI
	 */
	protected $BuyingGuideHub;

	/**
	 * @return BuyingGuideType
	 * @param integer $index 
	 */
	function getBuyingGuide($index = null)
	{
		if ($index !== null) {
			return $this->BuyingGuide[$index];
		} else {
			return $this->BuyingGuide;
		}
	}
	/**
	 * @return void
	 * @param BuyingGuideType $value 
	 * @param  $index 
	 */
	function setBuyingGuide($value, $index = null)
	{
		if ($index !== null) {
			$this->BuyingGuide[$index] = $value;
		} else {
			$this->BuyingGuide = $value;
		}
	}
	/**
	 * @return void
	 * @param BuyingGuideType $value 
	 */
	function addBuyingGuide($value)
	{
		$this->BuyingGuide[] = $value;
	}
	/**
	 * @return anyURI
	 */
	function getBuyingGuideHub()
	{
		return $this->BuyingGuideHub;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setBuyingGuideHub($value)
	{
		$this->BuyingGuideHub = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BuyingGuideDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'BuyingGuide' =>
					array(
						'required' => false,
						'type' => 'BuyingGuideType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'BuyingGuideHub' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
