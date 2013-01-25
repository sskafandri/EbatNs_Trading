<?php
// autogenerated file 10.09.2012 12:58
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Type defining the <b>CategoryGroup</b> container, which defines the category 
 * group to which the corresponding Business Policies profile will be applied, and 
 * a flag that indicates whether or not that Business Policies profile is the 
 * default for that category group. <br><br><span 
 * class="tablenote"><strong>Note:</strong>Business Policies are not yet available 
 * for use on the eBay platform.</span> 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CategoryGroupType.html
 *
 */
class CategoryGroupType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $Name;
	/**
	 * @var boolean
	 */
	protected $IsDefault;

	/**
	 * @return string
	 */
	function getName()
	{
		return $this->Name;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setName($value)
	{
		$this->Name = $value;
	}
	/**
	 * @return boolean
	 */
	function getIsDefault()
	{
		return $this->IsDefault;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIsDefault($value)
	{
		$this->IsDefault = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CategoryGroupType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Name' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IsDefault' =>
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
