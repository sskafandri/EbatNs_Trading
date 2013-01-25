<?php
// autogenerated file 10.09.2012 12:44
// $Id: $
// $Log: $
//
//
require_once 'HistogramEntryType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * A generic type used for histograms. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CharacteristicsSetProductHistogramType.html
 *
 */
class CharacteristicsSetProductHistogramType extends EbatNs_ComplexType
{
	/**
	 * @var HistogramEntryType
	 */
	protected $HistogramEntry;

	/**
	 * @return HistogramEntryType
	 * @param integer $index 
	 */
	function getHistogramEntry($index = null)
	{
		if ($index !== null) {
			return $this->HistogramEntry[$index];
		} else {
			return $this->HistogramEntry;
		}
	}
	/**
	 * @return void
	 * @param HistogramEntryType $value 
	 * @param  $index 
	 */
	function setHistogramEntry($value, $index = null)
	{
		if ($index !== null) {
			$this->HistogramEntry[$index] = $value;
		} else {
			$this->HistogramEntry = $value;
		}
	}
	/**
	 * @return void
	 * @param HistogramEntryType $value 
	 */
	function addHistogramEntry($value)
	{
		$this->HistogramEntry[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CharacteristicsSetProductHistogramType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'HistogramEntry' =>
					array(
						'required' => false,
						'type' => 'HistogramEntryType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
