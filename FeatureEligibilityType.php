<?php
// autogenerated file 22.07.2011 09:24
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Indicates whether the seller making the request can list with certain features.A 
 * seller's eligibility is determined by their feedback rating. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FeatureEligibilityType.html
 *
 */
class FeatureEligibilityType extends EbatNs_ComplexType
{
	/**
	 * @var boolean
	 */
	protected $QualifiesForBuyItNow;
	/**
	 * @var boolean
	 */
	protected $QualifiesForBuyItNowMultiple;
	/**
	 * @var boolean
	 */
	protected $QualifiedForFixedPriceOneDayDuration;
	/**
	 * @var boolean
	 */
	protected $QualifiesForVariations;
	/**
	 * @var boolean
	 */
	protected $QualifiedForAuctionOneDayDuration;

	/**
	 * @return boolean
	 */
	function getQualifiesForBuyItNow()
	{
		return $this->QualifiesForBuyItNow;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setQualifiesForBuyItNow($value)
	{
		$this->QualifiesForBuyItNow = $value;
	}
	/**
	 * @return boolean
	 */
	function getQualifiesForBuyItNowMultiple()
	{
		return $this->QualifiesForBuyItNowMultiple;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setQualifiesForBuyItNowMultiple($value)
	{
		$this->QualifiesForBuyItNowMultiple = $value;
	}
	/**
	 * @return boolean
	 */
	function getQualifiedForFixedPriceOneDayDuration()
	{
		return $this->QualifiedForFixedPriceOneDayDuration;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setQualifiedForFixedPriceOneDayDuration($value)
	{
		$this->QualifiedForFixedPriceOneDayDuration = $value;
	}
	/**
	 * @return boolean
	 */
	function getQualifiesForVariations()
	{
		return $this->QualifiesForVariations;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setQualifiesForVariations($value)
	{
		$this->QualifiesForVariations = $value;
	}
	/**
	 * @return boolean
	 */
	function getQualifiedForAuctionOneDayDuration()
	{
		return $this->QualifiedForAuctionOneDayDuration;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setQualifiedForAuctionOneDayDuration($value)
	{
		$this->QualifiedForAuctionOneDayDuration = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FeatureEligibilityType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'QualifiesForBuyItNow' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QualifiesForBuyItNowMultiple' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QualifiedForFixedPriceOneDayDuration' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QualifiesForVariations' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QualifiedForAuctionOneDayDuration' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
