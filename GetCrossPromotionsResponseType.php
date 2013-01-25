<?php
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'CrossPromotionsType.php';

/**
 * Returns a list of either upsell or cross-sell items for a given item ID.The list 
 * can be filtered by the viewer's role, either buyer or seller. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetCrossPromotionsResponseType.html
 *
 */
class GetCrossPromotionsResponseType extends AbstractResponseType
{
	/**
	 * @var CrossPromotionsType
	 */
	protected $CrossPromotion;

	/**
	 * @return CrossPromotionsType
	 */
	function getCrossPromotion()
	{
		return $this->CrossPromotion;
	}
	/**
	 * @return void
	 * @param CrossPromotionsType $value 
	 */
	function setCrossPromotion($value)
	{
		$this->CrossPromotion = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetCrossPromotionsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CrossPromotion' =>
					array(
						'required' => false,
						'type' => 'CrossPromotionsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
