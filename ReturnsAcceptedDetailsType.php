<?php
// autogenerated file 22.07.2011 09:17
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ReturnsAcceptedDetailsType.html
 *
 */
class ReturnsAcceptedDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var token
	 */
	protected $ReturnsAcceptedOption;
	/**
	 * @var string
	 */
	protected $Description;

	/**
	 * @return token
	 */
	function getReturnsAcceptedOption()
	{
		return $this->ReturnsAcceptedOption;
	}
	/**
	 * @return void
	 * @param token $value 
	 */
	function setReturnsAcceptedOption($value)
	{
		$this->ReturnsAcceptedOption = $value;
	}
	/**
	 * @return string
	 */
	function getDescription()
	{
		return $this->Description;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDescription($value)
	{
		$this->Description = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ReturnsAcceptedDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ReturnsAcceptedOption' =>
					array(
						'required' => false,
						'type' => 'token',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Description' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
