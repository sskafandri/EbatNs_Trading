<?php
// autogenerated file 22.07.2011 09:24
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * A list of one or more characteristic set IDs. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CharacteristicSetIDsType.html
 *
 */
class CharacteristicSetIDsType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $ID;

	/**
	 * @return string
	 * @param integer $index 
	 */
	function getID($index = null)
	{
		if ($index !== null) {
			return $this->ID[$index];
		} else {
			return $this->ID;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setID($value, $index = null)
	{
		if ($index !== null) {
			$this->ID[$index] = $value;
		} else {
			$this->ID = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addID($value)
	{
		$this->ID[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CharacteristicSetIDsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
