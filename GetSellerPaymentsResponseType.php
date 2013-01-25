<?php
// autogenerated file 22.07.2011 09:17
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'SellerPaymentType.php';
require_once 'PaginationResultType.php';

/**
 * Returns a summary of pending or paid payments that Half.com created for the 
 * selleridentified by the authentication token in the request. Only returns 
 * payments thatoccurred within a particular pay period. Each payment is for one 
 * transaction forone item in one order. An order can contain transactions for 
 * multiple items frommultiple sellers, but this call only retrieves payments that 
 * are relevant to oneseller. Payments are only issued for items and transactions 
 * that the seller hasconfirmed (see the Half.com online help for details). The 
 * financial value of apayment is typically based on an amount that a buyer paid to 
 * Half.com for atransaction, plus the shipping cost the buyer paid to Half.com for 
 * the item, minusHalf.com's commission. For most sellers, each month contains two 
 * pay periods: Onefrom the 1st to the 15th of the month, and one from the 16th to 
 * the last day ofthe month. Payments are submitted to the seller's financial 
 * institution a certainnumber of days after the current pay period ends (see the 
 * Half.com online help fordetails). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetSellerPaymentsResponseType.html
 *
 */
class GetSellerPaymentsResponseType extends AbstractResponseType
{
	/**
	 * @var PaginationResultType
	 */
	protected $PaginationResult;
	/**
	 * @var boolean
	 */
	protected $HasMorePayments;
	/**
	 * @var SellerPaymentType
	 */
	protected $SellerPayment;
	/**
	 * @var int
	 */
	protected $PaymentsPerPage;
	/**
	 * @var int
	 */
	protected $PageNumber;
	/**
	 * @var int
	 */
	protected $ReturnedPaymentCountActual;

	/**
	 * @return PaginationResultType
	 */
	function getPaginationResult()
	{
		return $this->PaginationResult;
	}
	/**
	 * @return void
	 * @param PaginationResultType $value 
	 */
	function setPaginationResult($value)
	{
		$this->PaginationResult = $value;
	}
	/**
	 * @return boolean
	 */
	function getHasMorePayments()
	{
		return $this->HasMorePayments;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setHasMorePayments($value)
	{
		$this->HasMorePayments = $value;
	}
	/**
	 * @return SellerPaymentType
	 * @param integer $index 
	 */
	function getSellerPayment($index = null)
	{
		if ($index !== null) {
			return $this->SellerPayment[$index];
		} else {
			return $this->SellerPayment;
		}
	}
	/**
	 * @return void
	 * @param SellerPaymentType $value 
	 * @param  $index 
	 */
	function setSellerPayment($value, $index = null)
	{
		if ($index !== null) {
			$this->SellerPayment[$index] = $value;
		} else {
			$this->SellerPayment = $value;
		}
	}
	/**
	 * @return void
	 * @param SellerPaymentType $value 
	 */
	function addSellerPayment($value)
	{
		$this->SellerPayment[] = $value;
	}
	/**
	 * @return int
	 */
	function getPaymentsPerPage()
	{
		return $this->PaymentsPerPage;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPaymentsPerPage($value)
	{
		$this->PaymentsPerPage = $value;
	}
	/**
	 * @return int
	 */
	function getPageNumber()
	{
		return $this->PageNumber;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPageNumber($value)
	{
		$this->PageNumber = $value;
	}
	/**
	 * @return int
	 */
	function getReturnedPaymentCountActual()
	{
		return $this->ReturnedPaymentCountActual;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setReturnedPaymentCountActual($value)
	{
		$this->ReturnedPaymentCountActual = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetSellerPaymentsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PaginationResult' =>
					array(
						'required' => false,
						'type' => 'PaginationResultType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'HasMorePayments' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerPayment' =>
					array(
						'required' => false,
						'type' => 'SellerPaymentType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'PaymentsPerPage' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PageNumber' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReturnedPaymentCountActual' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
