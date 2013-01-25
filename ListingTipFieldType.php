<?php
// autogenerated file 29.12.2011 14:54
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * (out) Identifies the item field that the tip relates to. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ListingTipFieldType.html
 *
 */
class ListingTipFieldType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $ListingTipFieldID;
	/**
	 * @var string
	 */
	protected $FieldTip;
	/**
	 * @var string
	 */
	protected $CurrentFieldText;
	/**
	 * @var string
	 */
	protected $CurrentFieldValue;

	/**
	 * @return string
	 */
	function getListingTipFieldID()
	{
		return $this->ListingTipFieldID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setListingTipFieldID($value)
	{
		$this->ListingTipFieldID = $value;
	}
	/**
	 * @return string
	 */
	function getFieldTip()
	{
		return $this->FieldTip;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setFieldTip($value)
	{
		$this->FieldTip = $value;
	}
	/**
	 * @return string
	 */
	function getCurrentFieldText()
	{
		return $this->CurrentFieldText;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCurrentFieldText($value)
	{
		$this->CurrentFieldText = $value;
	}
	/**
	 * @return string
	 */
	function getCurrentFieldValue()
	{
		return $this->CurrentFieldValue;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCurrentFieldValue($value)
	{
		$this->CurrentFieldValue = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ListingTipFieldType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ListingTipFieldID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FieldTip' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CurrentFieldText' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CurrentFieldValue' =>
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
