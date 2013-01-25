<?php
// autogenerated file 22.07.2011 08:57
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'AnnouncementMessageCodeType.php';

/**
 * Event messaging details 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AnnouncementMessageType.html
 *
 */
class AnnouncementMessageType extends EbatNs_ComplexType
{
	/**
	 * @var dateTime
	 */
	protected $AnnouncementStartTime;
	/**
	 * @var dateTime
	 */
	protected $EventTime;
	/**
	 * @var AnnouncementMessageCodeType
	 */
	protected $MessageType;

	/**
	 * @return dateTime
	 */
	function getAnnouncementStartTime()
	{
		return $this->AnnouncementStartTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setAnnouncementStartTime($value)
	{
		$this->AnnouncementStartTime = $value;
	}
	/**
	 * @return dateTime
	 */
	function getEventTime()
	{
		return $this->EventTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setEventTime($value)
	{
		$this->EventTime = $value;
	}
	/**
	 * @return AnnouncementMessageCodeType
	 */
	function getMessageType()
	{
		return $this->MessageType;
	}
	/**
	 * @return void
	 * @param AnnouncementMessageCodeType $value 
	 */
	function setMessageType($value)
	{
		$this->MessageType = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AnnouncementMessageType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'AnnouncementStartTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EventTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MessageType' =>
					array(
						'required' => false,
						'type' => 'AnnouncementMessageCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
