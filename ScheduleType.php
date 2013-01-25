<?php
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Sellers create live auction catalogs and schedule their live auction events by 
 * usingthe eBay Live Auctions Web site user interface. The seller can create a 
 * catalog inthe Live Auctions system several months before a sale. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ScheduleType.html
 *
 */
class ScheduleType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $ScheduleID;
	/**
	 * @var dateTime
	 */
	protected $ScheduleTime;

	/**
	 * @return int
	 */
	function getScheduleID()
	{
		return $this->ScheduleID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setScheduleID($value)
	{
		$this->ScheduleID = $value;
	}
	/**
	 * @return dateTime
	 */
	function getScheduleTime()
	{
		return $this->ScheduleTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setScheduleTime($value)
	{
		$this->ScheduleTime = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ScheduleType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ScheduleID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ScheduleTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
