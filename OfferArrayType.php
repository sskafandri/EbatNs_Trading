<?php
// autogenerated file 10.09.2012 12:41
// $Id: $
// $Log: $
//
//
require_once 'OfferType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Container for a list of offers. May contain zero, one, or multipleOfferType 
 * objects, each of which represents one offer extended bya user on a listing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/OfferArrayType.html
 *
 */
class OfferArrayType extends EbatNs_ComplexType
{
	/**
	 * @var OfferType
	 */
	protected $Offer;

	/**
	 * @return OfferType
	 * @param integer $index 
	 */
	function getOffer($index = null)
	{
		if ($index !== null) {
			return $this->Offer[$index];
		} else {
			return $this->Offer;
		}
	}
	/**
	 * @return void
	 * @param OfferType $value 
	 * @param  $index 
	 */
	function setOffer($value, $index = null)
	{
		if ($index !== null) {
			$this->Offer[$index] = $value;
		} else {
			$this->Offer = $value;
		}
	}
	/**
	 * @return void
	 * @param OfferType $value 
	 */
	function addOffer($value)
	{
		$this->Offer[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('OfferArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Offer' =>
					array(
						'required' => false,
						'type' => 'OfferType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
