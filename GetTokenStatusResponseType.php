<?php
// autogenerated file 09.05.2012 13:11
// $Id: $
// $Log: $
//
//
require_once 'TokenStatusType.php';
require_once 'AbstractResponseType.php';

/**
 * Returns token status. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetTokenStatusResponseType.html
 *
 */
class GetTokenStatusResponseType extends AbstractResponseType
{
	/**
	 * @var TokenStatusType
	 */
	protected $TokenStatus;

	/**
	 * @return TokenStatusType
	 */
	function getTokenStatus()
	{
		return $this->TokenStatus;
	}
	/**
	 * @return void
	 * @param TokenStatusType $value 
	 */
	function setTokenStatus($value)
	{
		$this->TokenStatus = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetTokenStatusResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'TokenStatus' =>
					array(
						'required' => false,
						'type' => 'TokenStatusType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
