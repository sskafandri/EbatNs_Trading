<?php
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves the custom page or pages for the authenticated user's Store. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetStoreCustomPageRequestType.html
 *
 */
class GetStoreCustomPageRequestType extends AbstractRequestType
{
	/**
	 * @var long
	 */
	protected $PageID;

	/**
	 * @return long
	 */
	function getPageID()
	{
		return $this->PageID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setPageID($value)
	{
		$this->PageID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetStoreCustomPageRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PageID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
