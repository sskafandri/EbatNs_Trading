<?php
// autogenerated file 10.09.2012 12:41
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves an authentication token for a user.&nbsp;<b>Also for Half.com</b>. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FetchTokenRequestType.html
 *
 */
class FetchTokenRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $SecretID;
	/**
	 * @var string
	 */
	protected $SessionID;

	/**
	 * @return string
	 */
	function getSecretID()
	{
		return $this->SecretID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSecretID($value)
	{
		$this->SecretID = $value;
	}
	/**
	 * @return string
	 */
	function getSessionID()
	{
		return $this->SessionID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSessionID($value)
	{
		$this->SessionID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FetchTokenRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SecretID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SessionID' =>
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
