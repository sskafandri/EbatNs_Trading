<?php
// autogenerated file 22.07.2011 08:57
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Validate the user response to botblock challenge. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ValidateChallengeInputResponseType.html
 *
 */
class ValidateChallengeInputResponseType extends AbstractResponseType
{
	/**
	 * @var boolean
	 */
	protected $ValidToken;

	/**
	 * @return boolean
	 */
	function getValidToken()
	{
		return $this->ValidToken;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setValidToken($value)
	{
		$this->ValidToken = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ValidateChallengeInputResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ValidToken' =>
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
