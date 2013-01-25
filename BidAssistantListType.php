<?php
// autogenerated file 09.05.2012 12:52
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines how a list of BidAssistant items should be returned. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BidAssistantListType.html
 *
 */
class BidAssistantListType extends EbatNs_ComplexType
{
	/**
	 * @var long
	 */
	protected $BidGroupID;
	/**
	 * @var boolean
	 */
	protected $IncludeNotes;

	/**
	 * @return long
	 */
	function getBidGroupID()
	{
		return $this->BidGroupID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setBidGroupID($value)
	{
		$this->BidGroupID = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeNotes()
	{
		return $this->IncludeNotes;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeNotes($value)
	{
		$this->IncludeNotes = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BidAssistantListType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'BidGroupID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeNotes' =>
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
