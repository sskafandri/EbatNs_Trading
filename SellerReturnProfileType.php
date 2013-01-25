<?php
// autogenerated file 09.05.2012 13:11
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Type defining the <b>SellerReturnProfile</b> container, which is used in an 
 * Add/Revise/Relist Trading API call to reference a Business Policies return 
 * policy profile.<br/><br/><span class="tablenote"><b>Note:</b>Beginning with 
 * Version 763, the new Business Policies Management API and related TradingAPI 
 * containers/fields become available for testing in the Sandbox environment. In 
 * May2012, Business Policies becomes fully functional and sellers can apply 
 * Business Policies profiles to live eBay listings.<span/> 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellerReturnProfileType.html
 *
 */
class SellerReturnProfileType extends EbatNs_ComplexType
{
	/**
	 * @var long
	 */
	protected $ReturnProfileID;
	/**
	 * @var string
	 */
	protected $ReturnProfileName;

	/**
	 * @return long
	 */
	function getReturnProfileID()
	{
		return $this->ReturnProfileID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setReturnProfileID($value)
	{
		$this->ReturnProfileID = $value;
	}
	/**
	 * @return string
	 */
	function getReturnProfileName()
	{
		return $this->ReturnProfileName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setReturnProfileName($value)
	{
		$this->ReturnProfileName = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellerReturnProfileType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ReturnProfileID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReturnProfileName' =>
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
