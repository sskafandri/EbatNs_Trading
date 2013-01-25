<?php
// autogenerated file 22.07.2011 08:57
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Container for a set of data elements (see below) that are applicable for a setof 
 * products that were returned within the same response. The data elements 
 * containsupplemental information that can help end users understand product 
 * search results.Usage of this information is optional and may require developers 
 * to inspectthe information to determine how it can be applied in an 
 * application.Output only. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DataElementSetType.html
 *
 */
class DataElementSetType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $DataElement;
	/**
	 * @var int
	 */
	protected $DataElementID;

	/**
	 * @return string
	 */
	function getDataElement()
	{
		return $this->DataElement;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDataElement($value)
	{
		$this->DataElement = $value;
	}
	/**
	 * @return int
	 */
	function getDataElementID()
	{
		return $this->DataElementID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setDataElementID($value)
	{
		$this->DataElementID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DataElementSetType', 'http://www.w3.org/2001/XMLSchema');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DataElement' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DataElementID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));	$this->_attributes = array_merge($this->_attributes,
		array(
			'attributeSetID' =>
			array(
				'name' => 'attributeSetID',
				'type' => 'int',
				'use' => 'required'
			)
		));

	}
}
?>
