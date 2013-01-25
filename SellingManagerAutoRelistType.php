<?php
// autogenerated file 09.05.2012 13:15
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'SellingManagerAutoRelistOptionCodeType.php';
require_once 'BestOfferDetailsType.php';
require_once 'SellingManagerAutoRelistTypeCodeType.php';

/**
 * Provides information about an automated relisting rule. Automated relisting 
 * rules cannot be combined with automated listing rules.A template can have one 
 * set of information per automated relisting rule specified. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellingManagerAutoRelistType.html
 *
 */
class SellingManagerAutoRelistType extends EbatNs_ComplexType
{
	/**
	 * @var SellingManagerAutoRelistTypeCodeType
	 */
	protected $Type;
	/**
	 * @var SellingManagerAutoRelistOptionCodeType
	 */
	protected $RelistCondition;
	/**
	 * @var int
	 */
	protected $RelistAfterDays;
	/**
	 * @var int
	 */
	protected $RelistAfterHours;
	/**
	 * @var time
	 */
	protected $RelistAtSpecificTimeOfDay;
	/**
	 * @var BestOfferDetailsType
	 */
	protected $BestOfferDetails;
	/**
	 * @var int
	 */
	protected $ListingHoldInventoryLevel;

	/**
	 * @return SellingManagerAutoRelistTypeCodeType
	 */
	function getType()
	{
		return $this->Type;
	}
	/**
	 * @return void
	 * @param SellingManagerAutoRelistTypeCodeType $value 
	 */
	function setType($value)
	{
		$this->Type = $value;
	}
	/**
	 * @return SellingManagerAutoRelistOptionCodeType
	 */
	function getRelistCondition()
	{
		return $this->RelistCondition;
	}
	/**
	 * @return void
	 * @param SellingManagerAutoRelistOptionCodeType $value 
	 */
	function setRelistCondition($value)
	{
		$this->RelistCondition = $value;
	}
	/**
	 * @return int
	 */
	function getRelistAfterDays()
	{
		return $this->RelistAfterDays;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setRelistAfterDays($value)
	{
		$this->RelistAfterDays = $value;
	}
	/**
	 * @return int
	 */
	function getRelistAfterHours()
	{
		return $this->RelistAfterHours;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setRelistAfterHours($value)
	{
		$this->RelistAfterHours = $value;
	}
	/**
	 * @return time
	 */
	function getRelistAtSpecificTimeOfDay()
	{
		return $this->RelistAtSpecificTimeOfDay;
	}
	/**
	 * @return void
	 * @param time $value 
	 */
	function setRelistAtSpecificTimeOfDay($value)
	{
		$this->RelistAtSpecificTimeOfDay = $value;
	}
	/**
	 * @return BestOfferDetailsType
	 */
	function getBestOfferDetails()
	{
		return $this->BestOfferDetails;
	}
	/**
	 * @return void
	 * @param BestOfferDetailsType $value 
	 */
	function setBestOfferDetails($value)
	{
		$this->BestOfferDetails = $value;
	}
	/**
	 * @return int
	 */
	function getListingHoldInventoryLevel()
	{
		return $this->ListingHoldInventoryLevel;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setListingHoldInventoryLevel($value)
	{
		$this->ListingHoldInventoryLevel = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellingManagerAutoRelistType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Type' =>
					array(
						'required' => false,
						'type' => 'SellingManagerAutoRelistTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RelistCondition' =>
					array(
						'required' => false,
						'type' => 'SellingManagerAutoRelistOptionCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RelistAfterDays' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RelistAfterHours' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RelistAtSpecificTimeOfDay' =>
					array(
						'required' => false,
						'type' => 'time',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BestOfferDetails' =>
					array(
						'required' => false,
						'type' => 'BestOfferDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ListingHoldInventoryLevel' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
