<?php
// autogenerated file 10.09.2012 12:58
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ModifyNameType.php';

/**
 * A list of one or more ModifyName containers. Each ModifyName container has Name 
 * and NewName elements. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ModifyNameArrayType.html
 *
 */
class ModifyNameArrayType extends EbatNs_ComplexType
{
	/**
	 * @var ModifyNameType
	 */
	protected $ModifyName;

	/**
	 * @return ModifyNameType
	 * @param integer $index 
	 */
	function getModifyName($index = null)
	{
		if ($index !== null) {
			return $this->ModifyName[$index];
		} else {
			return $this->ModifyName;
		}
	}
	/**
	 * @return void
	 * @param ModifyNameType $value 
	 * @param  $index 
	 */
	function setModifyName($value, $index = null)
	{
		if ($index !== null) {
			$this->ModifyName[$index] = $value;
		} else {
			$this->ModifyName = $value;
		}
	}
	/**
	 * @return void
	 * @param ModifyNameType $value 
	 */
	function addModifyName($value)
	{
		$this->ModifyName[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ModifyNameArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ModifyName' =>
					array(
						'required' => false,
						'type' => 'ModifyNameType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>