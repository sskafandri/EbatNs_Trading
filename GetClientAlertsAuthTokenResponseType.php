<?php
// autogenerated file 22.07.2011 09:17
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Returns a Client Alerts token. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetClientAlertsAuthTokenResponseType.html
 *
 */
class GetClientAlertsAuthTokenResponseType extends AbstractResponseType
{
	/**
	 * @var string
	 */
	protected $ClientAlertsAuthToken;
	/**
	 * @var dateTime
	 */
	protected $HardExpirationTime;

	/**
	 * @return string
	 */
	function getClientAlertsAuthToken()
	{
		return $this->ClientAlertsAuthToken;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setClientAlertsAuthToken($value)
	{
		$this->ClientAlertsAuthToken = $value;
	}
	/**
	 * @return dateTime
	 */
	function getHardExpirationTime()
	{
		return $this->HardExpirationTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setHardExpirationTime($value)
	{
		$this->HardExpirationTime = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetClientAlertsAuthTokenResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ClientAlertsAuthToken' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'HardExpirationTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
