<?php
// autogenerated file 15.11.2010 08:34
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/UserIdPasswordType.html
 *
 */
class UserIdPasswordType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $AppId;
	/**
	 * @var string
	 */
	protected $DevId;
	/**
	 * @var string
	 */
	protected $AuthCert;
	/**
	 * @var string
	 */
	protected $Username;
	/**
	 * @var string
	 */
	protected $Password;

	/**
	 * @return string
	 */
	function getAppId()
	{
		return $this->AppId;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setAppId($value)
	{
		$this->AppId = $value;
	}
	/**
	 * @return string
	 */
	function getDevId()
	{
		return $this->DevId;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDevId($value)
	{
		$this->DevId = $value;
	}
	/**
	 * @return string
	 */
	function getAuthCert()
	{
		return $this->AuthCert;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setAuthCert($value)
	{
		$this->AuthCert = $value;
	}
	/**
	 * @return string
	 */
	function getUsername()
	{
		return $this->Username;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setUsername($value)
	{
		$this->Username = $value;
	}
	/**
	 * @return string
	 */
	function getPassword()
	{
		return $this->Password;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPassword($value)
	{
		$this->Password = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('UserIdPasswordType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'AppId' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DevId' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AuthCert' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Username' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Password' =>
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
