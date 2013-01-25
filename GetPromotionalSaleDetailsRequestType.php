<?php
// autogenerated file 15.11.2010 08:34
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';
require_once 'PromotionalSaleStatusCodeType.php';

/**
 * Obtains information about promotional sales set up by an eBay store owner(the 
 * authenticated caller). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetPromotionalSaleDetailsRequestType.html
 *
 */
class GetPromotionalSaleDetailsRequestType extends AbstractRequestType
{
	/**
	 * @var long
	 */
	protected $PromotionalSaleID;
	/**
	 * @var PromotionalSaleStatusCodeType
	 */
	protected $PromotionalSaleStatus;

	/**
	 * @return long
	 */
	function getPromotionalSaleID()
	{
		return $this->PromotionalSaleID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setPromotionalSaleID($value)
	{
		$this->PromotionalSaleID = $value;
	}
	/**
	 * @return PromotionalSaleStatusCodeType
	 * @param integer $index 
	 */
	function getPromotionalSaleStatus($index = null)
	{
		if ($index !== null) {
			return $this->PromotionalSaleStatus[$index];
		} else {
			return $this->PromotionalSaleStatus;
		}
	}
	/**
	 * @return void
	 * @param PromotionalSaleStatusCodeType $value 
	 * @param  $index 
	 */
	function setPromotionalSaleStatus($value, $index = null)
	{
		if ($index !== null) {
			$this->PromotionalSaleStatus[$index] = $value;
		} else {
			$this->PromotionalSaleStatus = $value;
		}
	}
	/**
	 * @return void
	 * @param PromotionalSaleStatusCodeType $value 
	 */
	function addPromotionalSaleStatus($value)
	{
		$this->PromotionalSaleStatus[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetPromotionalSaleDetailsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PromotionalSaleID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PromotionalSaleStatus' =>
					array(
						'required' => false,
						'type' => 'PromotionalSaleStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
