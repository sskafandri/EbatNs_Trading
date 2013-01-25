<?php
// autogenerated file 09.05.2012 13:08
// $Id: $
// $Log: $
//
//
require_once 'VariationPictureRuleCodeType.php';
require_once 'SelectionModeCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'ValueFormatCodeType.php';
require_once 'ValueTypeCodeType.php';
require_once 'NameValueRelationshipType.php';
require_once 'VariationSpecificsRuleCodeType.php';

/**
 * Defines rules for recommended Item Specifics. The rules apply when the Item 
 * Specific is subsequently used in AddItem and related calls. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RecommendationValidationRulesType.html
 *
 */
class RecommendationValidationRulesType extends EbatNs_ComplexType
{
	/**
	 * @var ValueTypeCodeType
	 */
	protected $ValueType;
	/**
	 * @var int
	 */
	protected $MinValues;
	/**
	 * @var int
	 */
	protected $MaxValues;
	/**
	 * @var SelectionModeCodeType
	 */
	protected $SelectionMode;
	/**
	 * @var int
	 */
	protected $Confidence;
	/**
	 * @var NameValueRelationshipType
	 */
	protected $Relationship;
	/**
	 * @var VariationPictureRuleCodeType
	 */
	protected $VariationPicture;
	/**
	 * @var VariationSpecificsRuleCodeType
	 */
	protected $VariationSpecifics;
	/**
	 * @var ValueFormatCodeType
	 */
	protected $ValueFormat;

	/**
	 * @return ValueTypeCodeType
	 */
	function getValueType()
	{
		return $this->ValueType;
	}
	/**
	 * @return void
	 * @param ValueTypeCodeType $value 
	 */
	function setValueType($value)
	{
		$this->ValueType = $value;
	}
	/**
	 * @return int
	 */
	function getMinValues()
	{
		return $this->MinValues;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMinValues($value)
	{
		$this->MinValues = $value;
	}
	/**
	 * @return int
	 */
	function getMaxValues()
	{
		return $this->MaxValues;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxValues($value)
	{
		$this->MaxValues = $value;
	}
	/**
	 * @return SelectionModeCodeType
	 */
	function getSelectionMode()
	{
		return $this->SelectionMode;
	}
	/**
	 * @return void
	 * @param SelectionModeCodeType $value 
	 */
	function setSelectionMode($value)
	{
		$this->SelectionMode = $value;
	}
	/**
	 * @return int
	 */
	function getConfidence()
	{
		return $this->Confidence;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setConfidence($value)
	{
		$this->Confidence = $value;
	}
	/**
	 * @return NameValueRelationshipType
	 * @param integer $index 
	 */
	function getRelationship($index = null)
	{
		if ($index !== null) {
			return $this->Relationship[$index];
		} else {
			return $this->Relationship;
		}
	}
	/**
	 * @return void
	 * @param NameValueRelationshipType $value 
	 * @param  $index 
	 */
	function setRelationship($value, $index = null)
	{
		if ($index !== null) {
			$this->Relationship[$index] = $value;
		} else {
			$this->Relationship = $value;
		}
	}
	/**
	 * @return void
	 * @param NameValueRelationshipType $value 
	 */
	function addRelationship($value)
	{
		$this->Relationship[] = $value;
	}
	/**
	 * @return VariationPictureRuleCodeType
	 */
	function getVariationPicture()
	{
		return $this->VariationPicture;
	}
	/**
	 * @return void
	 * @param VariationPictureRuleCodeType $value 
	 */
	function setVariationPicture($value)
	{
		$this->VariationPicture = $value;
	}
	/**
	 * @return VariationSpecificsRuleCodeType
	 */
	function getVariationSpecifics()
	{
		return $this->VariationSpecifics;
	}
	/**
	 * @return void
	 * @param VariationSpecificsRuleCodeType $value 
	 */
	function setVariationSpecifics($value)
	{
		$this->VariationSpecifics = $value;
	}
	/**
	 * @return ValueFormatCodeType
	 */
	function getValueFormat()
	{
		return $this->ValueFormat;
	}
	/**
	 * @return void
	 * @param ValueFormatCodeType $value 
	 */
	function setValueFormat($value)
	{
		$this->ValueFormat = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RecommendationValidationRulesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ValueType' =>
					array(
						'required' => false,
						'type' => 'ValueTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MinValues' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaxValues' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SelectionMode' =>
					array(
						'required' => false,
						'type' => 'SelectionModeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Confidence' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Relationship' =>
					array(
						'required' => false,
						'type' => 'NameValueRelationshipType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'VariationPicture' =>
					array(
						'required' => false,
						'type' => 'VariationPictureRuleCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'VariationSpecifics' =>
					array(
						'required' => false,
						'type' => 'VariationSpecificsRuleCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ValueFormat' =>
					array(
						'required' => false,
						'type' => 'ValueFormatCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
