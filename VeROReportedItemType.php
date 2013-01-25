<?php
// autogenerated file 09.05.2012 12:52
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'VeROItemStatusCodeType.php';
require_once 'ItemIDType.php';

/**
 * A container for item and VeROReportedItem's. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/VeROReportedItemType.html
 *
 */
class VeROReportedItemType extends EbatNs_ComplexType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var VeROItemStatusCodeType
	 */
	protected $ItemStatus;
	/**
	 * @var string
	 */
	protected $ItemReasonForFailure;

	/**
	 * @return ItemIDType
	 */
	function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
	/**
	 * @return VeROItemStatusCodeType
	 */
	function getItemStatus()
	{
		return $this->ItemStatus;
	}
	/**
	 * @return void
	 * @param VeROItemStatusCodeType $value 
	 */
	function setItemStatus($value)
	{
		$this->ItemStatus = $value;
	}
	/**
	 * @return string
	 */
	function getItemReasonForFailure()
	{
		return $this->ItemReasonForFailure;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setItemReasonForFailure($value)
	{
		$this->ItemReasonForFailure = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('VeROReportedItemType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemStatus' =>
					array(
						'required' => false,
						'type' => 'VeROItemStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemReasonForFailure' =>
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
