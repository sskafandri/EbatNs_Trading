<?php
// autogenerated file 10.09.2012 12:49
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines supported fields forTicketListingDetails. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/TicketListingDetailsType.html
 *
 */
class TicketListingDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $EventTitle;
	/**
	 * @var string
	 */
	protected $Venue;
	/**
	 * @var string
	 */
	protected $PrintedDate;
	/**
	 * @var string
	 */
	protected $PrintedTime;

	/**
	 * @return string
	 */
	function getEventTitle()
	{
		return $this->EventTitle;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setEventTitle($value)
	{
		$this->EventTitle = $value;
	}
	/**
	 * @return string
	 */
	function getVenue()
	{
		return $this->Venue;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setVenue($value)
	{
		$this->Venue = $value;
	}
	/**
	 * @return string
	 */
	function getPrintedDate()
	{
		return $this->PrintedDate;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPrintedDate($value)
	{
		$this->PrintedDate = $value;
	}
	/**
	 * @return string
	 */
	function getPrintedTime()
	{
		return $this->PrintedTime;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPrintedTime($value)
	{
		$this->PrintedTime = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('TicketListingDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'EventTitle' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Venue' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PrintedDate' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PrintedTime' =>
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
