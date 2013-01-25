<?php
// autogenerated file 10.09.2012 12:41
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Creates a Selling Manager listing template that is similar to an item.This call 
 * is subject to change without notice; thedeprecation process is inapplicable to 
 * this call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SaveItemToSellingManagerTemplateRequestType.html
 *
 */
class SaveItemToSellingManagerTemplateRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var long
	 */
	protected $ProductID;
	/**
	 * @var string
	 */
	protected $TemplateName;

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
	function getTemplateName()
	{
		return $this->TemplateName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTemplateName($value)
	{
		$this->TemplateName = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SaveItemToSellingManagerTemplateRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
					'ProductID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TemplateName' =>
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
