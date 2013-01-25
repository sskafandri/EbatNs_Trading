<?php
// autogenerated file 15.11.2010 08:34
// $Id: $
// $Log: $
//
//
require_once 'SetUserNotesActionCodeType.php';
require_once 'NameValueListArrayType.php';
require_once 'SKUType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Enables users to add, replace, and delete My eBay notes foritems that are being 
 * tracked in the My eBay All Selling andAll Buying areas. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SetUserNotesRequestType.html
 *
 */
class SetUserNotesRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var SetUserNotesActionCodeType
	 */
	protected $Action;
	/**
	 * @var string
	 */
	protected $NoteText;
	/**
	 * @var string
	 */
	protected $TransactionID;
	/**
	 * @var NameValueListArrayType
	 */
	protected $VariationSpecifics;
	/**
	 * @var SKUType
	 */
	protected $SKU;

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
	 * @return SetUserNotesActionCodeType
	 */
	function getAction()
	{
		return $this->Action;
	}
	/**
	 * @return void
	 * @param SetUserNotesActionCodeType $value 
	 */
	function setAction($value)
	{
		$this->Action = $value;
	}
	/**
	 * @return string
	 */
	function getNoteText()
	{
		return $this->NoteText;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setNoteText($value)
	{
		$this->NoteText = $value;
	}
	/**
	 * @return string
	 */
	function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTransactionID($value)
	{
		$this->TransactionID = $value;
	}
	/**
	 * @return NameValueListArrayType
	 */
	function getVariationSpecifics()
	{
		return $this->VariationSpecifics;
	}
	/**
	 * @return void
	 * @param NameValueListArrayType $value 
	 */
	function setVariationSpecifics($value)
	{
		$this->VariationSpecifics = $value;
	}
	/**
	 * @return SKUType
	 */
	function getSKU()
	{
		return $this->SKU;
	}
	/**
	 * @return void
	 * @param SKUType $value 
	 */
	function setSKU($value)
	{
		$this->SKU = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SetUserNotesRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
					'Action' =>
					array(
						'required' => false,
						'type' => 'SetUserNotesActionCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'NoteText' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TransactionID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'VariationSpecifics' =>
					array(
						'required' => false,
						'type' => 'NameValueListArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SKU' =>
					array(
						'required' => false,
						'type' => 'SKUType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
