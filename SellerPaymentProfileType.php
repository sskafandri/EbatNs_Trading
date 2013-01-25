<?php
// autogenerated file 10.09.2012 12:41
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Type defining the <b>SellerPaymentProfile</b> container, which is used in an 
 * Add/Revise/Relist Trading API call to reference a Business Policies payment 
 * profile.<br/><br/><span class="tablenote"><b>Note:</b>Business Policies are not 
 * yet available for use on the eBay platform. <span/> 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellerPaymentProfileType.html
 *
 */
class SellerPaymentProfileType extends EbatNs_ComplexType
{
	/**
	 * @var long
	 */
	protected $PaymentProfileID;
	/**
	 * @var string
	 */
	protected $PaymentProfileName;

	/**
	 * @return long
	 */
	function getPaymentProfileID()
	{
		return $this->PaymentProfileID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setPaymentProfileID($value)
	{
		$this->PaymentProfileID = $value;
	}
	/**
	 * @return string
	 */
	function getPaymentProfileName()
	{
		return $this->PaymentProfileName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPaymentProfileName($value)
	{
		$this->PaymentProfileName = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellerPaymentProfileType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PaymentProfileID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PaymentProfileName' =>
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
