<?php
// autogenerated file 22.07.2011 08:53
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/XMLRequesterCredentialsType.html
 *
 */
class XMLRequesterCredentialsType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $Username;
	/**
	 * @var string
	 */
	protected $Password;
	/**
	 * @var string
	 */
	protected $eBayAuthToken;

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
	 * @return string
	 */
	function getEBayAuthToken()
	{
		return $this->eBayAuthToken;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setEBayAuthToken($value)
	{
		$this->eBayAuthToken = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('XMLRequesterCredentialsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
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
					),
					'eBayAuthToken' =>
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
