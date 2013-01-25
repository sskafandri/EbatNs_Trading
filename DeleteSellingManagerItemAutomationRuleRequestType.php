<?php
// autogenerated file 22.07.2011 09:17
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Removes the association of Selling Manager automation rulesto an item. Returns 
 * the remaining rules in the response.<br><br>This call is subject to change 
 * without notice; thedeprecation process is inapplicable to this call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DeleteSellingManagerItemAutomationRuleRequestType.html
 *
 */
class DeleteSellingManagerItemAutomationRuleRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var boolean
	 */
	protected $DeleteAutomatedRelistingRule;
	/**
	 * @var boolean
	 */
	protected $DeleteAutomatedSecondChanceOfferRule;

	/**
	 * @return ItemIDType
	 */
	function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setItemID($value)
	{
		$this->ItemID = $value;
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
		parent::__construct('DeleteSellingManagerItemAutomationRuleRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
