<?php
// autogenerated file 09.05.2012 12:48
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Contains a seller's preferences for receiving bidder notices. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BidderNoticePreferencesType.html
 *
 */
class BidderNoticePreferencesType extends EbatNs_ComplexType
{
	/**
	 * @var boolean
	 */
	protected $UnsuccessfulBidderNoticeIncludeMyItems;

	/**
	 * @return boolean
	 */
	function getUnsuccessfulBidderNoticeIncludeMyItems()
	{
		return $this->UnsuccessfulBidderNoticeIncludeMyItems;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setUnsuccessfulBidderNoticeIncludeMyItems($value)
	{
		$this->UnsuccessfulBidderNoticeIncludeMyItems = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BidderNoticePreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'UnsuccessfulBidderNoticeIncludeMyItems' =>
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
