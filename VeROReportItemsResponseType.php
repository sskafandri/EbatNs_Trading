<?php
// autogenerated file 15.11.2010 08:39
// $Id: $
// $Log: $
//
//
require_once 'VeROReportPacketStatusCodeType.php';
require_once 'AbstractResponseType.php';

/**
 * Contains a packet ID and status for the items reported by the VeRO Program 
 * member. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/VeROReportItemsResponseType.html
 *
 */
class VeROReportItemsResponseType extends AbstractResponseType
{
	/**
	 * @var long
	 */
	protected $VeROReportPacketID;
	/**
	 * @var VeROReportPacketStatusCodeType
	 */
	protected $VeROReportPacketStatus;

	/**
	 * @return long
	 */
	function getVeROReportPacketID()
	{
		return $this->VeROReportPacketID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setVeROReportPacketID($value)
	{
		$this->VeROReportPacketID = $value;
	}
	/**
	 * @return VeROReportPacketStatusCodeType
	 */
	function getVeROReportPacketStatus()
	{
		return $this->VeROReportPacketStatus;
	}
	/**
	 * @return void
	 * @param VeROReportPacketStatusCodeType $value 
	 */
	function setVeROReportPacketStatus($value)
	{
		$this->VeROReportPacketStatus = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('VeROReportItemsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'VeROReportPacketID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'VeROReportPacketStatus' =>
					array(
						'required' => false,
						'type' => 'VeROReportPacketStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
