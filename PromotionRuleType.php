<?php
// autogenerated file 15.11.2010 08:34
// $Id: $
// $Log: $
//
//
require_once 'PromotionMethodCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'PromotionSchemeCodeType.php';
require_once 'ItemIDType.php';

/**
 * Defines a rule that promotes items or a store category when a buyer views a 
 * specific item or store category. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PromotionRuleType.html
 *
 */
class PromotionRuleType extends EbatNs_ComplexType
{
	/**
	 * @var long
	 */
	protected $PromotedStoreCategoryID;
	/**
	 * @var string
	 */
	protected $PromotedeBayCategoryID;
	/**
	 * @var string
	 */
	protected $PromotedKeywords;
	/**
	 * @var ItemIDType
	 */
	protected $ReferringItemID;
	/**
	 * @var long
	 */
	protected $ReferringStoreCategoryID;
	/**
	 * @var string
	 */
	protected $ReferringeBayCategoryID;
	/**
	 * @var string
	 */
	protected $ReferringKeywords;
	/**
	 * @var PromotionSchemeCodeType
	 */
	protected $PromotionScheme;
	/**
	 * @var PromotionMethodCodeType
	 */
	protected $PromotionMethod;

	/**
	 * @return long
	 */
	function getPromotedStoreCategoryID()
	{
		return $this->PromotedStoreCategoryID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setPromotedStoreCategoryID($value)
	{
		$this->PromotedStoreCategoryID = $value;
	}
	/**
	 * @return string
	 */
	function getPromotedeBayCategoryID()
	{
		return $this->PromotedeBayCategoryID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPromotedeBayCategoryID($value)
	{
		$this->PromotedeBayCategoryID = $value;
	}
	/**
	 * @return string
	 */
	function getPromotedKeywords()
	{
		return $this->PromotedKeywords;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPromotedKeywords($value)
	{
		$this->PromotedKeywords = $value;
	}
	/**
	 * @return ItemIDType
	 */
	function getReferringItemID()
	{
		return $this->ReferringItemID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setReferringItemID($value)
	{
		$this->ReferringItemID = $value;
	}
	/**
	 * @return long
	 */
	function getReferringStoreCategoryID()
	{
		return $this->ReferringStoreCategoryID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setReferringStoreCategoryID($value)
	{
		$this->ReferringStoreCategoryID = $value;
	}
	/**
	 * @return string
	 */
	function getReferringeBayCategoryID()
	{
		return $this->ReferringeBayCategoryID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setReferringeBayCategoryID($value)
	{
		$this->ReferringeBayCategoryID = $value;
	}
	/**
	 * @return string
	 */
	function getReferringKeywords()
	{
		return $this->ReferringKeywords;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setReferringKeywords($value)
	{
		$this->ReferringKeywords = $value;
	}
	/**
	 * @return PromotionSchemeCodeType
	 */
	function getPromotionScheme()
	{
		return $this->PromotionScheme;
	}
	/**
	 * @return void
	 * @param PromotionSchemeCodeType $value 
	 */
	function setPromotionScheme($value)
	{
		$this->PromotionScheme = $value;
	}
	/**
	 * @return PromotionMethodCodeType
	 */
	function getPromotionMethod()
	{
		return $this->PromotionMethod;
	}
	/**
	 * @return void
	 * @param PromotionMethodCodeType $value 
	 */
	function setPromotionMethod($value)
	{
		$this->PromotionMethod = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PromotionRuleType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PromotedStoreCategoryID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PromotedeBayCategoryID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PromotedKeywords' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReferringItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReferringStoreCategoryID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReferringeBayCategoryID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReferringKeywords' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PromotionScheme' =>
					array(
						'required' => false,
						'type' => 'PromotionSchemeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PromotionMethod' =>
					array(
						'required' => false,
						'type' => 'PromotionMethodCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
