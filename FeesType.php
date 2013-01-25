<?php
// autogenerated file 09.05.2012 13:08
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'FeeType.php';

/**
 * Identifies a set of one or more fees that a member pays to eBay (oran eBay 
 * company). Instances of this type can hold one or more fees. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FeesType.html
 *
 */
class FeesType extends EbatNs_ComplexType
{
	/**
	 * @var FeeType
	 */
	protected $Fee;

	/**
	 * @return FeeType
	 * @param integer $index 
	 */
	function getFee($index = null)
	{
		if ($index !== null) {
			return $this->Fee[$index];
		} else {
			return $this->Fee;
		}
	}
	/**
	 * @return void
	 * @param FeeType $value 
	 * @param  $index 
	 */
	function setFee($value, $index = null)
	{
		if ($index !== null) {
			$this->Fee[$index] = $value;
		} else {
			$this->Fee = $value;
		}
	}
	/**
	 * @return void
	 * @param FeeType $value 
	 */
	function addFee($value)
	{
		$this->Fee[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FeesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Fee' =>
					array(
						'required' => false,
						'type' => 'FeeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
