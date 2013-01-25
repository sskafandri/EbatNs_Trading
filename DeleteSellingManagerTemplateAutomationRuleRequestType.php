<?php
// autogenerated file 10.09.2012 12:49
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Removes the association of Selling Manager automation rulesto a template. 
 * Returns the remaining rules in the response.This call is subject to change 
 * without notice; thedeprecation process is inapplicable to this call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DeleteSellingManagerTemplateAutomationRuleRequestType.html
 *
 */
class DeleteSellingManagerTemplateAutomationRuleRequestType extends AbstractRequestType
{
	/**
	 * @var long
	 */
	protected $SaleTemplateID;
	/**
	 * @var boolean
	 */
	protected $DeleteAutomatedListingRule;
	/**
	 * @var boolean
	 */
	protected $DeleteAutomatedRelistingRule;
	/**
	 * @var boolean
	 */
	protected $DeleteAutomatedSecondChanceOfferRule;

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
	 * @return boolean
	 */
	function getDeleteAutomatedListingRule()
	{
		return $this->DeleteAutomatedListingRule;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDeleteAutomatedListingRule($value)
	{
		$this->DeleteAutomatedListingRule = $value;
	}
	/**
	 * @return boolean
	 */
	function getDeleteAutomatedRelistingRule()
	{
		return $this->DeleteAutomatedRelistingRule;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDeleteAutomatedRelistingRule($value)
	{
		$this->DeleteAutomatedRelistingRule = $value;
	}
	/**
	 * @return boolean
	 */
	function getDeleteAutomatedSecondChanceOfferRule()
	{
		return $this->DeleteAutomatedSecondChanceOfferRule;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDeleteAutomatedSecondChanceOfferRule($value)
	{
		$this->DeleteAutomatedSecondChanceOfferRule = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DeleteSellingManagerTemplateAutomationRuleRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
					),
					'DeleteAutomatedListingRule' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DeleteAutomatedRelistingRule' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DeleteAutomatedSecondChanceOfferRule' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
