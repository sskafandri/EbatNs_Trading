<?php
// autogenerated file 22.07.2011 08:57
// $Id: $
// $Log: $
//
//
require_once 'ItemArrayType.php';
require_once 'AbstractResponseType.php';

/**
 * Contains the items returned by the call. Items for which a seller event 
 * hasoccurred (and that meet any filters specified as input) are returned in 
 * anItemArrayType object, within which are zero, one, or multiple ItemType 
 * objects.Each ItemType object contains the detail data for one item listing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetSellerEventsResponseType.html
 *
 */
class GetSellerEventsResponseType extends AbstractResponseType
{
	/**
	 * @var dateTime
	 */
	protected $TimeTo;
	/**
	 * @var ItemArrayType
	 */
	protected $ItemArray;

	/**
	 * @return dateTime
	 */
	function getTimeTo()
	{
		return $this->TimeTo;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setTimeTo($value)
	{
		$this->TimeTo = $value;
	}
	/**
	 * @return ItemArrayType
	 */
	function getItemArray()
	{
		return $this->ItemArray;
	}
	/**
	 * @return void
	 * @param ItemArrayType $value 
	 */
	function setItemArray($value)
	{
		$this->ItemArray = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetSellerEventsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'TimeTo' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemArray' =>
					array(
						'required' => false,
						'type' => 'ItemArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
