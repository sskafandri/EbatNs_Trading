<?php
// autogenerated file 09.05.2012 13:11
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'SellerPaymentProfileType.php';
require_once 'SellerShippingProfileType.php';
require_once 'SellerReturnProfileType.php';

/**
 * Type defining the <b>SellerProfiles</b> container, which consists of 
 * referencesto a seller's payment, shipping, and/or return policy 
 * profiles.<br/><br/><span class="tablenote"><b>Note:</b>Beginning with Version 
 * 763, the new Business Policies Management API and related TradingAPI 
 * containers/fields become available for testing in the Sandbox environment. In 
 * May2012, Business Policies becomes fully functional and sellers can apply 
 * Business Policies profiles to live eBay listings.<span/> 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellerProfilesType.html
 *
 */
class SellerProfilesType extends EbatNs_ComplexType
{
	/**
	 * @var SellerShippingProfileType
	 */
	protected $SellerShippingProfile;
	/**
	 * @var SellerReturnProfileType
	 */
	protected $SellerReturnProfile;
	/**
	 * @var SellerPaymentProfileType
	 */
	protected $SellerPaymentProfile;

	/**
	 * @return SellerShippingProfileType
	 */
	function getSellerShippingProfile()
	{
		return $this->SellerShippingProfile;
	}
	/**
	 * @return void
	 * @param SellerShippingProfileType $value 
	 */
	function setSellerShippingProfile($value)
	{
		$this->SellerShippingProfile = $value;
	}
	/**
	 * @return SellerReturnProfileType
	 */
	function getSellerReturnProfile()
	{
		return $this->SellerReturnProfile;
	}
	/**
	 * @return void
	 * @param SellerReturnProfileType $value 
	 */
	function setSellerReturnProfile($value)
	{
		$this->SellerReturnProfile = $value;
	}
	/**
	 * @return SellerPaymentProfileType
	 */
	function getSellerPaymentProfile()
	{
		return $this->SellerPaymentProfile;
	}
	/**
	 * @return void
	 * @param SellerPaymentProfileType $value 
	 */
	function setSellerPaymentProfile($value)
	{
		$this->SellerPaymentProfile = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellerProfilesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SellerShippingProfile' =>
					array(
						'required' => false,
						'type' => 'SellerShippingProfileType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerReturnProfile' =>
					array(
						'required' => false,
						'type' => 'SellerReturnProfileType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerPaymentProfile' =>
					array(
						'required' => false,
						'type' => 'SellerPaymentProfileType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
