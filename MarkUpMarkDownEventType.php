<?php
// autogenerated file 29.12.2011 14:42
// $Id: $
// $Log: $
//
//
require_once 'MarkUpMarkDownEventTypeCodeType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Describes an individual mark-up or mark-down event. eBay will automaticallymark 
 * an application as down if attempts to deliver a notification failrepeatedly. 
 * eBay may mark an application down manually under certaincircumstances. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MarkUpMarkDownEventType.html
 *
 */
class MarkUpMarkDownEventType extends EbatNs_ComplexType
{
	/**
	 * @var MarkUpMarkDownEventTypeCodeType
	 */
	protected $Type;
	/**
	 * @var dateTime
	 */
	protected $Time;
	/**
	 * @var string
	 */
	protected $Reason;

	/**
	 * @return MarkUpMarkDownEventTypeCodeType
	 */
	function getType()
	{
		return $this->Type;
	}
	/**
	 * @return void
	 * @param MarkUpMarkDownEventTypeCodeType $value 
	 */
	function setType($value)
	{
		$this->Type = $value;
	}
	/**
	 * @return dateTime
	 */
	function getTime()
	{
		return $this->Time;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setTime($value)
	{
		$this->Time = $value;
	}
	/**
	 * @return string
	 */
	function getReason()
	{
		return $this->Reason;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setReason($value)
	{
		$this->Reason = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MarkUpMarkDownEventType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Type' =>
					array(
						'required' => false,
						'type' => 'MarkUpMarkDownEventTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Time' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Reason' =>
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
