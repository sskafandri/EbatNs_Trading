<?php
// autogenerated file 10.09.2012 12:44
// $Id: $
// $Log: $
//
//
require_once 'ItemType.php';
require_once 'AbstractRequestType.php';

/**
 * Revises a Selling Manager template.This call is subject to change without 
 * notice; thedeprecation process is inapplicable to this call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ReviseSellingManagerTemplateRequestType.html
 *
 */
class ReviseSellingManagerTemplateRequestType extends AbstractRequestType
{
	/**
	 * @var long
	 */
	protected $SaleTemplateID;
	/**
	 * @var long
	 */
	protected $ProductID;
	/**
	 * @var string
	 */
	protected $SaleTemplateName;
	/**
	 * @var ItemType
	 */
	protected $Item;
	/**
	 * @var string
	 */
	protected $DeletedField;
	/**
	 * @var boolean
	 */
	protected $VerifyOnly;

	/**
	 * @return long
	 */
	function getSaleTemplateID()
	{
		return $this->SaleTemplateID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setSaleTemplateID($value)
	{
		$this->SaleTemplateID = $value;
	}
	/**
	 * @return long
	 */
	function getProductID()
	{
		return $this->ProductID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setProductID($value)
	{
		$this->ProductID = $value;
	}
	/**
	 * @return string
	 */
	function getSaleTemplateName()
	{
		return $this->SaleTemplateName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSaleTemplateName($value)
	{
		$this->SaleTemplateName = $value;
	}
	/**
	 * @return ItemType
	 */
	function getItem()
	{
		return $this->Item;
	}
	/**
	 * @return void
	 * @param ItemType $value 
	 */
	function setItem($value)
	{
		$this->Item = $value;
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
	 * @return boolean
	 */
	function getVerifyOnly()
	{
		return $this->VerifyOnly;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setVerifyOnly($value)
	{
		$this->VerifyOnly = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ReviseSellingManagerTemplateRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SaleTemplateID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProductID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SaleTemplateName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Item' =>
					array(
						'required' => false,
						'type' => 'ItemType',
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
					'VerifyOnly' =>
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
