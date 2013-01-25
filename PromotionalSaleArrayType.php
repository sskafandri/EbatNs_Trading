<?php
// autogenerated file 22.07.2011 08:53
// $Id: $
// $Log: $
//
//
require_once 'PromotionalSaleType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * An array of promotional sales. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PromotionalSaleArrayType.html
 *
 */
class PromotionalSaleArrayType extends EbatNs_ComplexType
{
	/**
	 * @var PromotionalSaleType
	 */
	protected $PromotionalSale;

	/**
	 * @return PromotionalSaleType
	 * @param integer $index 
	 */
	function getPromotionalSale($index = null)
	{
		if ($index !== null) {
			return $this->PromotionalSale[$index];
		} else {
			return $this->PromotionalSale;
		}
	}
	/**
	 * @return void
	 * @param PromotionalSaleType $value 
	 * @param  $index 
	 */
	function setPromotionalSale($value, $index = null)
	{
		if ($index !== null) {
			$this->PromotionalSale[$index] = $value;
		} else {
			$this->PromotionalSale = $value;
		}
	}
	/**
	 * @return void
	 * @param PromotionalSaleType $value 
	 */
	function addPromotionalSale($value)
	{
		$this->PromotionalSale[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PromotionalSaleArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PromotionalSale' =>
					array(
						'required' => false,
						'type' => 'PromotionalSaleType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
