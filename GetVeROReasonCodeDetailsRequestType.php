<?php
// autogenerated file 29.12.2011 14:18
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves details for VeRO reason codes and their descriptions. You can specify 
 * a reason code ID to get details for a specific reason on the site specified in 
 * the request header. If ReasonCodeID is not passed in the request, all reason 
 * codes are returned. Set ReturnAllSites to true to retrieve reason codes for all 
 * sites.You must be a member of the Verified Rights Owner (VeRO) Program to use 
 * this call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetVeROReasonCodeDetailsRequestType.html
 *
 */
class GetVeROReasonCodeDetailsRequestType extends AbstractRequestType
{
	/**
	 * @var long
	 */
	protected $ReasonCodeID;
	/**
	 * @var boolean
	 */
	protected $ReturnAllSites;

	/**
	 * @return long
	 */
	function getReasonCodeID()
	{
		return $this->ReasonCodeID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setReasonCodeID($value)
	{
		$this->ReasonCodeID = $value;
	}
	/**
	 * @return boolean
	 */
	function getReturnAllSites()
	{
		return $this->ReturnAllSites;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setReturnAllSites($value)
	{
		$this->ReturnAllSites = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetVeROReasonCodeDetailsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ReasonCodeID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReturnAllSites' =>
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
