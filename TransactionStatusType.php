<?php
// autogenerated file 09.05.2012 13:04
// $Id: $
// $Log: $
//
//
require_once 'PaymentStatusCodeType.php';
require_once 'CompleteStatusCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'BuyerPaymentMethodCodeType.php';
require_once 'CheckoutStatusCodeType.php';
require_once 'PaymentHoldStatusCodeType.php';

/**
 * Contains the order status, e.g. the buyer's onlinepayment and whether the 
 * checkout process for the order is complete. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/TransactionStatusType.html
 *
 */
class TransactionStatusType extends EbatNs_ComplexType
{
	/**
	 * @var PaymentStatusCodeType
	 */
	protected $eBayPaymentStatus;
	/**
	 * @var CheckoutStatusCodeType
	 */
	protected $CheckoutStatus;
	/**
	 * @var dateTime
	 */
	protected $LastTimeModified;
	/**
	 * @var BuyerPaymentMethodCodeType
	 */
	protected $PaymentMethodUsed;
	/**
	 * @var CompleteStatusCodeType
	 */
	protected $CompleteStatus;
	/**
	 * @var boolean
	 */
	protected $BuyerSelectedShipping;
	/**
	 * @var PaymentHoldStatusCodeType
	 */
	protected $PaymentHoldStatus;
	/**
	 * @var boolean
	 */
	protected $IntegratedMerchantCreditCardEnabled;

	/**
	 * @return PaymentStatusCodeType
	 */
	function getEBayPaymentStatus()
	{
		return $this->eBayPaymentStatus;
	}
	/**
	 * @return void
	 * @param PaymentStatusCodeType $value 
	 */
	function setEBayPaymentStatus($value)
	{
		$this->eBayPaymentStatus = $value;
	}
	/**
	 * @return CheckoutStatusCodeType
	 */
	function getCheckoutStatus()
	{
		return $this->CheckoutStatus;
	}
	/**
	 * @return void
	 * @param CheckoutStatusCodeType $value 
	 */
	function setCheckoutStatus($value)
	{
		$this->CheckoutStatus = $value;
	}
	/**
	 * @return dateTime
	 */
	function getLastTimeModified()
	{
		return $this->LastTimeModified;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setLastTimeModified($value)
	{
		$this->LastTimeModified = $value;
	}
	/**
	 * @return BuyerPaymentMethodCodeType
	 */
	function getPaymentMethodUsed()
	{
		return $this->PaymentMethodUsed;
	}
	/**
	 * @return void
	 * @param BuyerPaymentMethodCodeType $value 
	 */
	function setPaymentMethodUsed($value)
	{
		$this->PaymentMethodUsed = $value;
	}
	/**
	 * @return CompleteStatusCodeType
	 */
	function getCompleteStatus()
	{
		return $this->CompleteStatus;
	}
	/**
	 * @return void
	 * @param CompleteStatusCodeType $value 
	 */
	function setCompleteStatus($value)
	{
		$this->CompleteStatus = $value;
	}
	/**
	 * @return boolean
	 */
	function getBuyerSelectedShipping()
	{
		return $this->BuyerSelectedShipping;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setBuyerSelectedShipping($value)
	{
		$this->BuyerSelectedShipping = $value;
	}
	/**
	 * @return PaymentHoldStatusCodeType
	 */
	function getPaymentHoldStatus()
	{
		return $this->PaymentHoldStatus;
	}
	/**
	 * @return void
	 * @param PaymentHoldStatusCodeType $value 
	 */
	function setPaymentHoldStatus($value)
	{
		$this->PaymentHoldStatus = $value;
	}
	/**
	 * @return boolean
	 */
	function getIntegratedMerchantCreditCardEnabled()
	{
		return $this->IntegratedMerchantCreditCardEnabled;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIntegratedMerchantCreditCardEnabled($value)
	{
		$this->IntegratedMerchantCreditCardEnabled = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('TransactionStatusType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'eBayPaymentStatus' =>
					array(
						'required' => false,
						'type' => 'PaymentStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CheckoutStatus' =>
					array(
						'required' => false,
						'type' => 'CheckoutStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'LastTimeModified' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PaymentMethodUsed' =>
					array(
						'required' => false,
						'type' => 'BuyerPaymentMethodCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CompleteStatus' =>
					array(
						'required' => false,
						'type' => 'CompleteStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BuyerSelectedShipping' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PaymentHoldStatus' =>
					array(
						'required' => false,
						'type' => 'PaymentHoldStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IntegratedMerchantCreditCardEnabled' =>
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
