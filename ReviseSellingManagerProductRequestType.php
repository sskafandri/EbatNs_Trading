<?php
// autogenerated file 15.11.2010 08:34
// $Id: $
// $Log: $
//
//
require_once 'SellingManagerProductDetailsType.php';
require_once 'SellingManagerProductSpecificsType.php';
require_once 'SellingManagerFolderDetailsType.php';
require_once 'AbstractRequestType.php';

/**
 * Revises a Selling Manager product.<br><br>This call is subject to change without 
 * notice; thedeprecation process is inapplicable to this call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ReviseSellingManagerProductRequestType.html
 *
 */
class ReviseSellingManagerProductRequestType extends AbstractRequestType
{
	/**
	 * @var SellingManagerProductDetailsType
	 */
	protected $SellingManagerProductDetails;
	/**
	 * @var SellingManagerFolderDetailsType
	 */
	protected $SellingManagerFolderDetails;
	/**
	 * @var string
	 */
	protected $DeletedField;
	/**
	 * @var SellingManagerProductSpecificsType
	 */
	protected $SellingManagerProductSpecifics;

	/**
	 * @return SellingManagerProductDetailsType
	 */
	function getSellingManagerProductDetails()
	{
		return $this->SellingManagerProductDetails;
	}
	/**
	 * @return void
	 * @param SellingManagerProductDetailsType $value 
	 */
	function setSellingManagerProductDetails($value)
	{
		$this->SellingManagerProductDetails = $value;
	}
	/**
	 * @return SellingManagerFolderDetailsType
	 */
	function getSellingManagerFolderDetails()
	{
		return $this->SellingManagerFolderDetails;
	}
	/**
	 * @return void
	 * @param SellingManagerFolderDetailsType $value 
	 */
	function setSellingManagerFolderDetails($value)
	{
		$this->SellingManagerFolderDetails = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getDeletedField($index = null)
	{
		if ($index !== null) {
			return $this->DeletedField[$index];
		} else {
			return $this->DeletedField;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setDeletedField($value, $index = null)
	{
		if ($index !== null) {
			$this->DeletedField[$index] = $value;
		} else {
			$this->DeletedField = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addDeletedField($value)
	{
		$this->DeletedField[] = $value;
	}
	/**
	 * @return SellingManagerProductSpecificsType
	 */
	function getSellingManagerProductSpecifics()
	{
		return $this->SellingManagerProductSpecifics;
	}
	/**
	 * @return void
	 * @param SellingManagerProductSpecificsType $value 
	 */
	function setSellingManagerProductSpecifics($value)
	{
		$this->SellingManagerProductSpecifics = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ReviseSellingManagerProductRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SellingManagerProductDetails' =>
					array(
						'required' => false,
						'type' => 'SellingManagerProductDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellingManagerFolderDetails' =>
					array(
						'required' => false,
						'type' => 'SellingManagerFolderDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DeletedField' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'SellingManagerProductSpecifics' =>
					array(
						'required' => false,
						'type' => 'SellingManagerProductSpecificsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
