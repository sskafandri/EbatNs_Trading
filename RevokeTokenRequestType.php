<?php
// autogenerated file 10.09.2012 12:41
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Voluntarily revokes a token before it would otherwise expire. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RevokeTokenRequestType.html
 *
 */
class RevokeTokenRequestType extends AbstractRequestType
{
	/**
	 * @var boolean
	 */
	protected $UnsubscribeNotification;

	/**
	 * @return boolean
	 */
	function getUnsubscribeNotification()
	{
		return $this->UnsubscribeNotification;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setUnsubscribeNotification($value)
	{
		$this->UnsubscribeNotification = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RevokeTokenRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'UnsubscribeNotification' =>
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
