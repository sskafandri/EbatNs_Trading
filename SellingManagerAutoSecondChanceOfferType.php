<?php
// autogenerated file 22.07.2011 09:17
// $Id: $
// $Log: $
//
//
require_once 'SecondChanceOfferDurationCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'SellingManagerAutoSecondChanceOfferTypeCodeType.php';
require_once 'AmountType.php';

/**
 * Defines the options available for an automated second chance offer rule. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellingManagerAutoSecondChanceOfferType.html
 *
 */
class SellingManagerAutoSecondChanceOfferType extends EbatNs_ComplexType
{
	/**
	 * @var SellingManagerAutoSecondChanceOfferTypeCodeType
	 */
	protected $SecondChanceOfferCondition;
	/**
	 * @var AmountType
	 */
	protected $Amount;
	/**
	 * @var float
	 */
	protected $ProfitPercent;
	/**
	 * @var SecondChanceOfferDurationCodeType
	 */
	protected $Duration;
	/**
	 * @var int
	 */
	protected $ListingHoldInventoryLevel;

	/**
	 * @return SellingManagerAutoSecondChanceOfferTypeCodeType
	 */
	function getSecondChanceOfferCondition()
	{
		return $this->SecondChanceOfferCondition;
	}
	/**
	 * @return void
	 * @param SellingManagerAutoSecondChanceOfferTypeCodeType $value 
	 */
	function setSecondChanceOfferCondition($value)
	{
		$this->SecondChanceOfferCondition = $value;
	}
	/**
	 * @return AmountType
	 */
	function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setAmount($value)
	{
		$this->Amount = $value;
	}
	/**
	 * @return float
	 */
	function getProfitPercent()
	{
		return $this->ProfitPercent;
	}
	/**
	 * @return void
	 * @param float $value 
	 */
	function setProfitPercent($value)
	{
		$this->ProfitPercent = $value;
	}
	/**
	 * @return SecondChanceOfferDurationCodeType
	 */
	function getDuration()
	{
		return $this->Duration;
	}
	/**
	 * @return void
	 * @param SecondChanceOfferDurationCodeType $value 
	 */
	function setDuration($value)
	{
		$this->Duration = $value;
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
		parent::__construct('SellingManagerAutoSecondChanceOfferType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SecondChanceOfferCondition' =>
					array(
						'required' => false,
						'type' => 'SellingManagerAutoSecondChanceOfferTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Amount' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProfitPercent' =>
					array(
						'required' => false,
						'type' => 'float',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Duration' =>
					array(
						'required' => false,
						'type' => 'SecondChanceOfferDurationCodeType',
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
