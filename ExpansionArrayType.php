<?php
// autogenerated file 15.11.2010 08:39
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'SearchResultItemType.php';

/**
 * Container for items returned with an expanded search. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ExpansionArrayType.html
 *
 */
class ExpansionArrayType extends EbatNs_ComplexType
{
	/**
	 * @var SearchResultItemType
	 */
	protected $ExpansionItem;
	/**
	 * @var int
	 */
	protected $TotalAvailable;

	/**
	 * @return SearchResultItemType
	 * @param integer $index 
	 */
	function getExpansionItem($index = null)
	{
		if ($index !== null) {
			return $this->ExpansionItem[$index];
		} else {
			return $this->ExpansionItem;
		}
	}
	/**
	 * @return void
	 * @param SearchResultItemType $value 
	 * @param  $index 
	 */
	function setExpansionItem($value, $index = null)
	{
		if ($index !== null) {
			$this->ExpansionItem[$index] = $value;
		} else {
			$this->ExpansionItem = $value;
		}
	}
	/**
	 * @return void
	 * @param SearchResultItemType $value 
	 */
	function addExpansionItem($value)
	{
		$this->ExpansionItem[] = $value;
	}
	/**
	 * @return int
	 */
	function getTotalAvailable()
	{
		return $this->TotalAvailable;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalAvailable($value)
	{
		$this->TotalAvailable = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ExpansionArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ExpansionItem' =>
					array(
						'required' => false,
						'type' => 'SearchResultItemType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'TotalAvailable' =>
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
