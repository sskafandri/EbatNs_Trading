<?php
// autogenerated file 09.05.2012 13:00
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'SiteCodeType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SubscriptionType.html
 *
 */
class SubscriptionType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $EIASToken;
	/**
	 * @var SiteCodeType
	 */
	protected $SiteID;
	/**
	 * @var boolean
	 */
	protected $Active;

	/**
	 * @return string
	 */
	function getEIASToken()
	{
		return $this->EIASToken;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setEIASToken($value)
	{
		$this->EIASToken = $value;
	}
	/**
	 * @return SiteCodeType
	 */
	function getSiteID()
	{
		return $this->SiteID;
	}
	/**
	 * @return void
	 * @param SiteCodeType $value 
	 */
	function setSiteID($value)
	{
		$this->SiteID = $value;
	}
	/**
	 * @return boolean
	 */
	function getActive()
	{
		return $this->Active;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setActive($value)
	{
		$this->Active = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SubscriptionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'EIASToken' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SiteID' =>
					array(
						'required' => false,
						'type' => 'SiteCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Active' =>
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
