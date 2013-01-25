<?php
// autogenerated file 22.07.2011 08:57
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Mapping between an old category ID and an active category ID. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CategoryMappingType.html
 *
 */
class CategoryMappingType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CategoryMappingType', 'http://www.w3.org/2001/XMLSchema');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}	$this->_attributes = array_merge($this->_attributes,
		array(
			'oldID' =>
			array(
				'name' => 'oldID',
				'type' => 'string',
				'use' => 'required'
			),
			'id' =>
			array(
				'name' => 'id',
				'type' => 'string',
				'use' => 'required'
			)
		));

	}
}
?>
