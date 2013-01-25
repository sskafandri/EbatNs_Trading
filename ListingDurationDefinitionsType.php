<?php
// autogenerated file 09.05.2012 13:08
// $Id: $
// $Log: $
//
//
require_once 'ListingDurationDefinitionType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * A container node for sets of durations, each set describing the durations 
 * allowed forone listing type. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ListingDurationDefinitionsType.html
 *
 */
class ListingDurationDefinitionsType extends EbatNs_ComplexType
{
	/**
	 * @var ListingDurationDefinitionType
	 */
	protected $ListingDuration;

	/**
	 * @return ListingDurationDefinitionType
	 * @param integer $index 
	 */
	function getListingDuration($index = null)
	{
		if ($index !== null) {
			return $this->ListingDuration[$index];
		} else {
			return $this->ListingDuration;
		}
	}
	/**
	 * @return void
	 * @param ListingDurationDefinitionType $value 
	 * @param  $index 
	 */
	function setListingDuration($value, $index = null)
	{
		if ($index !== null) {
			$this->ListingDuration[$index] = $value;
		} else {
			$this->ListingDuration = $value;
		}
	}
	/**
	 * @return void
	 * @param ListingDurationDefinitionType $value 
	 */
	function addListingDuration($value)
	{
		$this->ListingDuration[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ListingDurationDefinitionsType', 'http://www.w3.org/2001/XMLSchema');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ListingDuration' =>
					array(
						'required' => false,
						'type' => 'ListingDurationDefinitionType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));	$this->_attributes = array_merge($this->_attributes,
		array(
			'Version' =>
			array(
				'name' => 'Version',
				'type' => 'int',
				'use' => 'required'
			)
		));

	}
}
?>
