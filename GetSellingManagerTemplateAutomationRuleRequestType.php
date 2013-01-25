<?php
// autogenerated file 22.07.2011 09:17
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves the set of Selling Manager automation rules associatedwith a Selling 
 * Manager template.This call is subject to change without notice; thedeprecation 
 * process is inapplicable to this call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetSellingManagerTemplateAutomationRuleRequestType.html
 *
 */
class GetSellingManagerTemplateAutomationRuleRequestType extends AbstractRequestType
{
	/**
	 * @var long
	 */
	protected $SaleTemplateID;

	/**
	 * @return long
	 */
	function getSaleTemplateID()
	{
		return $this->SaleTemplateID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setSaleTemplateID($value)
	{
		$this->SaleTemplateID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetSellingManagerTemplateAutomationRuleRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SaleTemplateID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
