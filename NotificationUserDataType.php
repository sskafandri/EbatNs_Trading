<?php
// autogenerated file 22.07.2011 08:53
// $Id: $
// $Log: $
//
//
require_once 'SummaryEventScheduleType.php';
require_once 'SMSSubscriptionType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * User data related to notifications. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/NotificationUserDataType.html
 *
 */
class NotificationUserDataType extends EbatNs_ComplexType
{
	/**
	 * @var SMSSubscriptionType
	 */
	protected $SMSSubscription;
	/**
	 * @var SummaryEventScheduleType
	 */
	protected $SummarySchedule;
	/**
	 * @var string
	 */
	protected $ExternalUserData;

	/**
	 * @return SMSSubscriptionType
	 */
	function getSMSSubscription()
	{
		return $this->SMSSubscription;
	}
	/**
	 * @return void
	 * @param SMSSubscriptionType $value 
	 */
	function setSMSSubscription($value)
	{
		$this->SMSSubscription = $value;
	}
	/**
	 * @return SummaryEventScheduleType
	 * @param integer $index 
	 */
	function getSummarySchedule($index = null)
	{
		if ($index !== null) {
			return $this->SummarySchedule[$index];
		} else {
			return $this->SummarySchedule;
		}
	}
	/**
	 * @return void
	 * @param SummaryEventScheduleType $value 
	 * @param  $index 
	 */
	function setSummarySchedule($value, $index = null)
	{
		if ($index !== null) {
			$this->SummarySchedule[$index] = $value;
		} else {
			$this->SummarySchedule = $value;
		}
	}
	/**
	 * @return void
	 * @param SummaryEventScheduleType $value 
	 */
	function addSummarySchedule($value)
	{
		$this->SummarySchedule[] = $value;
	}
	/**
	 * @return string
	 */
	function getExternalUserData()
	{
		return $this->ExternalUserData;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setExternalUserData($value)
	{
		$this->ExternalUserData = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('NotificationUserDataType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SMSSubscription' =>
					array(
						'required' => false,
						'type' => 'SMSSubscriptionType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SummarySchedule' =>
					array(
						'required' => false,
						'type' => 'SummaryEventScheduleType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'ExternalUserData' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
