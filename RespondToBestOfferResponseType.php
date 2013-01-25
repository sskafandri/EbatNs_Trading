<?php
// autogenerated file 10.09.2012 12:49
// $Id: $
// $Log: $
//
//
require_once 'BestOfferArrayType.php';
require_once 'AbstractResponseType.php';

/**
 * Contains a list of BestOffers that were either accepted or declined. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RespondToBestOfferResponseType.html
 *
 */
class RespondToBestOfferResponseType extends AbstractResponseType
{
	/**
	 * @var BestOfferArrayType
	 */
	protected $RespondToBestOffer;

	/**
	 * @return BestOfferArrayType
	 */
	function getRespondToBestOffer()
	{
		return $this->RespondToBestOffer;
	}
	/**
	 * @return void
	 * @param BestOfferArrayType $value 
	 */
	function setRespondToBestOffer($value)
	{
		$this->RespondToBestOffer = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RespondToBestOfferResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'RespondToBestOffer' =>
					array(
						'required' => false,
						'type' => 'BestOfferArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
