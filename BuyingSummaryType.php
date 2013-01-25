<?php
// autogenerated file 29.12.2011 14:42
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BuyingSummaryType.html
 *
 */
class BuyingSummaryType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $BiddingCount;
	/**
	 * @var int
	 */
	protected $WinningCount;
	/**
	 * @var AmountType
	 */
	protected $TotalWinningCost;
	/**
	 * @var int
	 */
	protected $WonCount;
	/**
	 * @var AmountType
	 */
	protected $TotalWonCost;
	/**
	 * @var int
	 */
	protected $WonDurationInDays;
	/**
	 * @var int
	 */
	protected $BestOfferCount;

	/**
	 * @return int
	 */
	function getBiddingCount()
	{
		return $this->BiddingCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setBiddingCount($value)
	{
		$this->BiddingCount = $value;
	}
	/**
	 * @return int
	 */
	function getWinningCount()
	{
		return $this->WinningCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setWinningCount($value)
	{
		$this->WinningCount = $value;
	}
	/**
	 * @return AmountType
	 */
	function getTotalWinningCost()
	{
		return $this->TotalWinningCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setTotalWinningCost($value)
	{
		$this->TotalWinningCost = $value;
	}
	/**
	 * @return int
	 */
	function getWonCount()
	{
		return $this->WonCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setWonCount($value)
	{
		$this->WonCount = $value;
	}
	/**
	 * @return AmountType
	 */
	function getTotalWonCost()
	{
		return $this->TotalWonCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setTotalWonCost($value)
	{
		$this->TotalWonCost = $value;
	}
	/**
	 * @return int
	 */
	function getWonDurationInDays()
	{
		return $this->WonDurationInDays;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setWonDurationInDays($value)
	{
		$this->WonDurationInDays = $value;
	}
	/**
	 * @return int
	 */
	function getBestOfferCount()
	{
		return $this->BestOfferCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setBestOfferCount($value)
	{
		$this->BestOfferCount = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BuyingSummaryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'BiddingCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'WinningCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalWinningCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'WonCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalWonCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'WonDurationInDays' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BestOfferCount' =>
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
