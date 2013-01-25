<?php
// autogenerated file 09.05.2012 13:04
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * A container for VeRO reason code details. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ReasonCodeDetailType.html
 *
 */
class ReasonCodeDetailType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $BriefText;
	/**
	 * @var string
	 */
	protected $DetailedText;

	/**
	 * @return string
	 */
	function getBriefText()
	{
		return $this->BriefText;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setBriefText($value)
	{
		$this->BriefText = $value;
	}
	/**
	 * @return string
	 */
	function getDetailedText()
	{
		return $this->DetailedText;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDetailedText($value)
	{
		$this->DetailedText = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ReasonCodeDetailType', 'http://www.w3.org/2001/XMLSchema');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'BriefText' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DetailedText' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));	$this->_attributes = array_merge($this->_attributes,
		array(
			'codeID' =>
			array(
				'name' => 'codeID',
				'type' => 'long',
				'use' => 'required'
			)
		));

	}
}
?>
