<?php
// autogenerated file 09.05.2012 12:52
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Contains the data for one type of feedback for one predefined timeperiod. Parent 
 * FeedbackPeriodArrayType object indicates the type offeedback counted: positive, 
 * neutral, negative, or total. Output only,in the summary feedback data returned 
 * by GetFeedback. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FeedbackPeriodType.html
 *
 */
class FeedbackPeriodType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $PeriodInDays;
	/**
	 * @var int
	 */
	protected $Count;

	/**
	 * @return int
	 */
	function getPeriodInDays()
	{
		return $this->PeriodInDays;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPeriodInDays($value)
	{
		$this->PeriodInDays = $value;
	}
	/**
	 * @return int
	 */
	function getCount()
	{
		return $this->Count;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setCount($value)
	{
		$this->Count = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FeedbackPeriodType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PeriodInDays' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Count' =>
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
