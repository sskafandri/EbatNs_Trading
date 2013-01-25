<?php
// autogenerated file 09.05.2012 13:11
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Specifies 1 year feedback metrics for a seller. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellerRoleMetricsType.html
 *
 */
class SellerRoleMetricsType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $PositiveFeedbackLeftCount;
	/**
	 * @var int
	 */
	protected $NegativeFeedbackLeftCount;
	/**
	 * @var int
	 */
	protected $NeutralFeedbackLeftCount;
	/**
	 * @var float
	 */
	protected $FeedbackLeftPercent;
	/**
	 * @var int
	 */
	protected $RepeatBuyerCount;
	/**
	 * @var float
	 */
	protected $RepeatBuyerPercent;
	/**
	 * @var int
	 */
	protected $UniqueBuyerCount;
	/**
	 * @var float
	 */
	protected $TransactionPercent;
	/**
	 * @var int
	 */
	protected $CrossBorderTransactionCount;
	/**
	 * @var float
	 */
	protected $CrossBorderTransactionPercent;

	/**
	 * @return int
	 */
	function getPositiveFeedbackLeftCount()
	{
		return $this->PositiveFeedbackLeftCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPositiveFeedbackLeftCount($value)
	{
		$this->PositiveFeedbackLeftCount = $value;
	}
	/**
	 * @return int
	 */
	function getNegativeFeedbackLeftCount()
	{
		return $this->NegativeFeedbackLeftCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setNegativeFeedbackLeftCount($value)
	{
		$this->NegativeFeedbackLeftCount = $value;
	}
	/**
	 * @return int
	 */
	function getNeutralFeedbackLeftCount()
	{
		return $this->NeutralFeedbackLeftCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setNeutralFeedbackLeftCount($value)
	{
		$this->NeutralFeedbackLeftCount = $value;
	}
	/**
	 * @return float
	 */
	function getFeedbackLeftPercent()
	{
		return $this->FeedbackLeftPercent;
	}
	/**
	 * @return void
	 * @param float $value 
	 */
	function setFeedbackLeftPercent($value)
	{
		$this->FeedbackLeftPercent = $value;
	}
	/**
	 * @return int
	 */
	function getRepeatBuyerCount()
	{
		return $this->RepeatBuyerCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setRepeatBuyerCount($value)
	{
		$this->RepeatBuyerCount = $value;
	}
	/**
	 * @return float
	 */
	function getRepeatBuyerPercent()
	{
		return $this->RepeatBuyerPercent;
	}
	/**
	 * @return void
	 * @param float $value 
	 */
	function setRepeatBuyerPercent($value)
	{
		$this->RepeatBuyerPercent = $value;
	}
	/**
	 * @return int
	 */
	function getUniqueBuyerCount()
	{
		return $this->UniqueBuyerCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setUniqueBuyerCount($value)
	{
		$this->UniqueBuyerCount = $value;
	}
	/**
	 * @return float
	 */
	function getTransactionPercent()
	{
		return $this->TransactionPercent;
	}
	/**
	 * @return void
	 * @param float $value 
	 */
	function setTransactionPercent($value)
	{
		$this->TransactionPercent = $value;
	}
	/**
	 * @return int
	 */
	function getCrossBorderTransactionCount()
	{
		return $this->CrossBorderTransactionCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setCrossBorderTransactionCount($value)
	{
		$this->CrossBorderTransactionCount = $value;
	}
	/**
	 * @return float
	 */
	function getCrossBorderTransactionPercent()
	{
		return $this->CrossBorderTransactionPercent;
	}
	/**
	 * @return void
	 * @param float $value 
	 */
	function setCrossBorderTransactionPercent($value)
	{
		$this->CrossBorderTransactionPercent = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellerRoleMetricsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PositiveFeedbackLeftCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'NegativeFeedbackLeftCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'NeutralFeedbackLeftCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FeedbackLeftPercent' =>
					array(
						'required' => false,
						'type' => 'float',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RepeatBuyerCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RepeatBuyerPercent' =>
					array(
						'required' => false,
						'type' => 'float',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UniqueBuyerCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TransactionPercent' =>
					array(
						'required' => false,
						'type' => 'float',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CrossBorderTransactionCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CrossBorderTransactionPercent' =>
					array(
						'required' => false,
						'type' => 'float',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
