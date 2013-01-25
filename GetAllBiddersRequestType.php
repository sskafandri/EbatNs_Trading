<?php
// autogenerated file 10.09.2012 12:49
// $Id: $
// $Log: $
//
//
require_once 'GetAllBiddersModeCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Provides three modes for retrieving a list of the users that bid ona listing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetAllBiddersRequestType.html
 *
 */
class GetAllBiddersRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var GetAllBiddersModeCodeType
	 */
	protected $CallMode;
	/**
	 * @var boolean
	 */
	protected $IncludeBiddingSummary;

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
	 * @return GetAllBiddersModeCodeType
	 */
	function getCallMode()
	{
		return $this->CallMode;
	}
	/**
	 * @return void
	 * @param GetAllBiddersModeCodeType $value 
	 */
	function setCallMode($value)
	{
		$this->CallMode = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeBiddingSummary()
	{
		return $this->IncludeBiddingSummary;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeBiddingSummary($value)
	{
		$this->IncludeBiddingSummary = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetAllBiddersRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
					'CallMode' =>
					array(
						'required' => false,
						'type' => 'GetAllBiddersModeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeBiddingSummary' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
