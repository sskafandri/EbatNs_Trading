<?php
// autogenerated file 09.05.2012 13:08
// $Id: $
// $Log: $
//
//
require_once 'UserIDType.php';
require_once 'PaginationType.php';
require_once 'FeedbackTypeCodeType.php';
require_once 'CommentTypeCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Retrieves the accumulated feedback left for a specified user or the 
 * summaryfeedback data for a specific order line item or item 
 * listing.&nbsp;<b>Also forHalf.com</b>. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetFeedbackRequestType.html
 *
 */
class GetFeedbackRequestType extends AbstractRequestType
{
	/**
	 * @var UserIDType
	 */
	protected $UserID;
	/**
	 * @var string
	 */
	protected $FeedbackID;
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var string
	 */
	protected $TransactionID;
	/**
	 * @var CommentTypeCodeType
	 */
	protected $CommentType;
	/**
	 * @var FeedbackTypeCodeType
	 */
	protected $FeedbackType;
	/**
	 * @var PaginationType
	 */
	protected $Pagination;
	/**
	 * @var string
	 */
	protected $OrderLineItemID;

	/**
	 * @return UserIDType
	 */
	function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * @return void
	 * @param UserIDType $value 
	 */
	function setUserID($value)
	{
		$this->UserID = $value;
	}
	/**
	 * @return string
	 */
	function getFeedbackID()
	{
		return $this->FeedbackID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setFeedbackID($value)
	{
		$this->FeedbackID = $value;
	}
	/**
	 * @return ItemIDType
	 */
	function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
	/**
	 * @return string
	 */
	function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTransactionID($value)
	{
		$this->TransactionID = $value;
	}
	/**
	 * @return CommentTypeCodeType
	 * @param integer $index 
	 */
	function getCommentType($index = null)
	{
		if ($index !== null) {
			return $this->CommentType[$index];
		} else {
			return $this->CommentType;
		}
	}
	/**
	 * @return void
	 * @param CommentTypeCodeType $value 
	 * @param  $index 
	 */
	function setCommentType($value, $index = null)
	{
		if ($index !== null) {
			$this->CommentType[$index] = $value;
		} else {
			$this->CommentType = $value;
		}
	}
	/**
	 * @return void
	 * @param CommentTypeCodeType $value 
	 */
	function addCommentType($value)
	{
		$this->CommentType[] = $value;
	}
	/**
	 * @return FeedbackTypeCodeType
	 */
	function getFeedbackType()
	{
		return $this->FeedbackType;
	}
	/**
	 * @return void
	 * @param FeedbackTypeCodeType $value 
	 */
	function setFeedbackType($value)
	{
		$this->FeedbackType = $value;
	}
	/**
	 * @return PaginationType
	 */
	function getPagination()
	{
		return $this->Pagination;
	}
	/**
	 * @return void
	 * @param PaginationType $value 
	 */
	function setPagination($value)
	{
		$this->Pagination = $value;
	}
	/**
	 * @return string
	 */
	function getOrderLineItemID()
	{
		return $this->OrderLineItemID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setOrderLineItemID($value)
	{
		$this->OrderLineItemID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetFeedbackRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'UserID' =>
					array(
						'required' => false,
						'type' => 'UserIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FeedbackID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TransactionID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CommentType' =>
					array(
						'required' => false,
						'type' => 'CommentTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'FeedbackType' =>
					array(
						'required' => false,
						'type' => 'FeedbackTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Pagination' =>
					array(
						'required' => false,
						'type' => 'PaginationType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'OrderLineItemID' =>
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
