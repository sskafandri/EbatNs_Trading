<?php
// autogenerated file 29.12.2011 14:42
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Indicates the number of items currently in the user's Watch List and the 
 * maximumnumber of items allowed in the Watch List. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddToWatchListResponseType.html
 *
 */
class AddToWatchListResponseType extends AbstractResponseType
{
	/**
	 * @var int
	 */
	protected $WatchListCount;
	/**
	 * @var int
	 */
	protected $WatchListMaximum;

	/**
	 * @return int
	 */
	function getWatchListCount()
	{
		return $this->WatchListCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setWatchListCount($value)
	{
		$this->WatchListCount = $value;
	}
	/**
	 * @return int
	 */
	function getWatchListMaximum()
	{
		return $this->WatchListMaximum;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setWatchListMaximum($value)
	{
		$this->WatchListMaximum = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AddToWatchListResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'WatchListCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'WatchListMaximum' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
