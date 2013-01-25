<?php
// autogenerated file 22.07.2011 08:53
// $Id: $
// $Log: $
//
//
require_once 'UserIDType.php';
require_once 'AbstractResponseType.php';
require_once 'ItemIDArrayType.php';

/**
 * This event is not functional. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ItemsCanceledEventType.html
 *
 */
class ItemsCanceledEventType extends AbstractResponseType
{
	/**
	 * @var ItemIDArrayType
	 */
	protected $CanceledItemIDArray;
	/**
	 * @var boolean
	 */
	protected $EligibleForRelist;
	/**
	 * @var UserIDType
	 */
	protected $SellerID;

	/**
	 * @return ItemIDArrayType
	 */
	function getCanceledItemIDArray()
	{
		return $this->CanceledItemIDArray;
	}
	/**
	 * @return void
	 * @param ItemIDArrayType $value 
	 */
	function setCanceledItemIDArray($value)
	{
		$this->CanceledItemIDArray = $value;
	}
	/**
	 * @return boolean
	 */
	function getEligibleForRelist()
	{
		return $this->EligibleForRelist;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setEligibleForRelist($value)
	{
		$this->EligibleForRelist = $value;
	}
	/**
	 * @return UserIDType
	 */
	function getSellerID()
	{
		return $this->SellerID;
	}
	/**
	 * @return void
	 * @param UserIDType $value 
	 */
	function setSellerID($value)
	{
		$this->SellerID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ItemsCanceledEventType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CanceledItemIDArray' =>
					array(
						'required' => false,
						'type' => 'ItemIDArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EligibleForRelist' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerID' =>
					array(
						'required' => false,
						'type' => 'UserIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
