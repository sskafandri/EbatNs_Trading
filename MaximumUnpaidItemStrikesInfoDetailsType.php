<?php
// autogenerated file 22.07.2011 09:17
// $Id: $
// $Log: $
//
//
require_once 'MaximumUnpaidItemStrikesDurationDetailsType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'MaximumUnpaidItemStrikesCountDetailsType.php';

/**
 * [Selling] Details of a buyer's maximum unpaid item strikes in a pre-defined time 
 * period. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MaximumUnpaidItemStrikesInfoDetailsType.html
 *
 */
class MaximumUnpaidItemStrikesInfoDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var MaximumUnpaidItemStrikesCountDetailsType
	 */
	protected $MaximumUnpaidItemStrikesCount;
	/**
	 * @var MaximumUnpaidItemStrikesDurationDetailsType
	 */
	protected $MaximumUnpaidItemStrikesDuration;

	/**
	 * @return MaximumUnpaidItemStrikesCountDetailsType
	 */
	function getMaximumUnpaidItemStrikesCount()
	{
		return $this->MaximumUnpaidItemStrikesCount;
	}
	/**
	 * @return void
	 * @param MaximumUnpaidItemStrikesCountDetailsType $value 
	 */
	function setMaximumUnpaidItemStrikesCount($value)
	{
		$this->MaximumUnpaidItemStrikesCount = $value;
	}
	/**
	 * @return MaximumUnpaidItemStrikesDurationDetailsType
	 * @param integer $index 
	 */
	function getMaximumUnpaidItemStrikesDuration($index = null)
	{
		if ($index !== null) {
			return $this->MaximumUnpaidItemStrikesDuration[$index];
		} else {
			return $this->MaximumUnpaidItemStrikesDuration;
		}
	}
	/**
	 * @return void
	 * @param MaximumUnpaidItemStrikesDurationDetailsType $value 
	 * @param  $index 
	 */
	function setMaximumUnpaidItemStrikesDuration($value, $index = null)
	{
		if ($index !== null) {
			$this->MaximumUnpaidItemStrikesDuration[$index] = $value;
		} else {
			$this->MaximumUnpaidItemStrikesDuration = $value;
		}
	}
	/**
	 * @return void
	 * @param MaximumUnpaidItemStrikesDurationDetailsType $value 
	 */
	function addMaximumUnpaidItemStrikesDuration($value)
	{
		$this->MaximumUnpaidItemStrikesDuration[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MaximumUnpaidItemStrikesInfoDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'MaximumUnpaidItemStrikesCount' =>
					array(
						'required' => false,
						'type' => 'MaximumUnpaidItemStrikesCountDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaximumUnpaidItemStrikesDuration' =>
					array(
						'required' => false,
						'type' => 'MaximumUnpaidItemStrikesDurationDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
