<?php
// autogenerated file 22.07.2011 09:17
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * DistanceType used in proximity search 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DistanceType.html
 *
 */
class DistanceType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $DistanceMeasurement;
	/**
	 * @var string
	 */
	protected $DistanceUnit;

	/**
	 * @return int
	 */
	function getDistanceMeasurement()
	{
		return $this->DistanceMeasurement;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setDistanceMeasurement($value)
	{
		$this->DistanceMeasurement = $value;
	}
	/**
	 * @return string
	 */
	function getDistanceUnit()
	{
		return $this->DistanceUnit;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDistanceUnit($value)
	{
		$this->DistanceUnit = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DistanceType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DistanceMeasurement' =>
					array(
						'required' => true,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '1..1'
					),
					'DistanceUnit' =>
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
