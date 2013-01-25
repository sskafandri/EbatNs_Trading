<?php
// autogenerated file 09.05.2012 13:14
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Removes an inventory folder when a user deletes it in My eBay.This call is 
 * subject to change without notice; the deprecation process is inapplicableto this 
 * call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DeleteSellingManagerInventoryFolderRequestType.html
 *
 */
class DeleteSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
	/**
	 * @var long
	 */
	protected $FolderID;

	/**
	 * @return long
	 */
	function getFolderID()
	{
		return $this->FolderID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setFolderID($value)
	{
		$this->FolderID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DeleteSellingManagerInventoryFolderRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'FolderID' =>
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
