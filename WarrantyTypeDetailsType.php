<?php
// autogenerated file 09.05.2012 13:08
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/WarrantyTypeDetailsType.html
 *
 */
class WarrantyTypeDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var token
	 */
	protected $WarrantyTypeOption;
	/**
	 * @var string
	 */
	protected $Description;

	/**
	 * @return token
	 */
	function getWarrantyTypeOption()
	{
		return $this->WarrantyTypeOption;
	}
	/**
	 * @return void
	 * @param token $value 
	 */
	function setWarrantyTypeOption($value)
	{
		$this->WarrantyTypeOption = $value;
	}
	/**
	 * @return string
	 */
	function getDescription()
	{
		return $this->Description;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDescription($value)
	{
		$this->Description = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('WarrantyTypeDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'WarrantyTypeOption' =>
					array(
						'required' => false,
						'type' => 'token',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Description' =>
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
