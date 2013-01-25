<?php
// autogenerated file 22.07.2011 09:17
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'PaginationResultType.php';
require_once 'MemberMessageExchangeArrayType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetMemberMessagesResponseType.html
 *
 */
class GetMemberMessagesResponseType extends AbstractResponseType
{
	/**
	 * @var MemberMessageExchangeArrayType
	 */
	protected $MemberMessage;
	/**
	 * @var PaginationResultType
	 */
	protected $PaginationResult;
	/**
	 * @var boolean
	 */
	protected $HasMoreItems;

	/**
	 * @return MemberMessageExchangeArrayType
	 */
	function getMemberMessage()
	{
		return $this->MemberMessage;
	}
	/**
	 * @return void
	 * @param MemberMessageExchangeArrayType $value 
	 */
	function setMemberMessage($value)
	{
		$this->MemberMessage = $value;
	}
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
	function getHasMoreItems()
	{
		return $this->HasMoreItems;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setHasMoreItems($value)
	{
		$this->HasMoreItems = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetMemberMessagesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'MemberMessage' =>
					array(
						'required' => false,
						'type' => 'MemberMessageExchangeArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PaginationResult' =>
					array(
						'required' => false,
						'type' => 'PaginationResultType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'HasMoreItems' =>
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
