<?php
// autogenerated file 29.12.2011 14:18
// $Id: $
// $Log: $
//
//
require_once 'ReviewType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Contains product reviews written by eBay members. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ReviewDetailsType.html
 *
 */
class ReviewDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var float
	 */
	protected $AverageRating;
	/**
	 * @var ReviewType
	 */
	protected $Review;

	/**
	 * @return float
	 */
	function getAverageRating()
	{
		return $this->AverageRating;
	}
	/**
	 * @return void
	 * @param float $value 
	 */
	function setAverageRating($value)
	{
		$this->AverageRating = $value;
	}
	/**
	 * @return ReviewType
	 * @param integer $index 
	 */
	function getReview($index = null)
	{
		if ($index !== null) {
			return $this->Review[$index];
		} else {
			return $this->Review;
		}
	}
	/**
	 * @return void
	 * @param ReviewType $value 
	 * @param  $index 
	 */
	function setReview($value, $index = null)
	{
		if ($index !== null) {
			$this->Review[$index] = $value;
		} else {
			$this->Review = $value;
		}
	}
	/**
	 * @return void
	 * @param ReviewType $value 
	 */
	function addReview($value)
	{
		$this->Review[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ReviewDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'AverageRating' =>
					array(
						'required' => false,
						'type' => 'float',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Review' =>
					array(
						'required' => false,
						'type' => 'ReviewType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
