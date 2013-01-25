<?php
// autogenerated file 29.12.2011 14:18
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'NotificationEventTypeCodeType.php';
require_once 'SummaryFrequencyCodeType.php';
require_once 'SummaryWindowPeriodCodeType.php';

/**
 * Details about a summary event schedule. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SummaryEventScheduleType.html
 *
 */
class SummaryEventScheduleType extends EbatNs_ComplexType
{
	/**
	 * @var NotificationEventTypeCodeType
	 */
	protected $EventType;
	/**
	 * @var SummaryWindowPeriodCodeType
	 */
	protected $SummaryPeriod;
	/**
	 * @var SummaryFrequencyCodeType
	 */
	protected $Frequency;

	/**
	 * @return NotificationEventTypeCodeType
	 */
	function getEventType()
	{
		return $this->EventType;
	}
	/**
	 * @return void
	 * @param NotificationEventTypeCodeType $value 
	 */
	function setEventType($value)
	{
		$this->EventType = $value;
	}
	/**
	 * @return SummaryWindowPeriodCodeType
	 */
	function getSummaryPeriod()
	{
		return $this->SummaryPeriod;
	}
	/**
	 * @return void
	 * @param SummaryWindowPeriodCodeType $value 
	 */
	function setSummaryPeriod($value)
	{
		$this->SummaryPeriod = $value;
	}
	/**
	 * @return SummaryFrequencyCodeType
	 */
	function getFrequency()
	{
		return $this->Frequency;
	}
	/**
	 * @return void
	 * @param SummaryFrequencyCodeType $value 
	 */
	function setFrequency($value)
	{
		$this->Frequency = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SummaryEventScheduleType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'EventType' =>
					array(
						'required' => false,
						'type' => 'NotificationEventTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SummaryPeriod' =>
					array(
						'required' => false,
						'type' => 'SummaryWindowPeriodCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Frequency' =>
					array(
						'required' => false,
						'type' => 'SummaryFrequencyCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
