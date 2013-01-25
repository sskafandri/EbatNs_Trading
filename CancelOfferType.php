<?php
// autogenerated file 09.05.2012 13:00
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
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CancelOfferType.html
 *
 */
class CancelOfferType extends EbatNs_ComplexType
{
	/**
	 * @var OfferType
	 */
	protected $Offer;
	/**
	 * @var string
	 */
	protected $Explanation;

	/**
	 * @return OfferType
	 */
	function getOffer()
	{
		return $this->Offer;
	}
	/**
	 * @return void
	 * @param OfferType $value 
	 */
	function setOffer($value)
	{
		$this->Offer = $value;
	}
	/**
	 * @return string
	 */
	function getExplanation()
	{
		return $this->Explanation;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setExplanation($value)
	{
		$this->Explanation = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CancelOfferType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Offer' =>
					array(
						'required' => false,
						'type' => 'OfferType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Explanation' =>
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
