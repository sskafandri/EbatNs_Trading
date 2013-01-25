<?php
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'BidGroupStatusCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'BidGroupItemType.php';

/**
 * Contains a paginated list of items in a bid group. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BidGroupType.html
 *
 */
class BidGroupType extends EbatNs_ComplexType
{
	/**
	 * @var BidGroupItemType
	 */
	protected $BidGroupItem;
	/**
	 * @var long
	 */
	protected $BidGroupID;
	/**
	 * @var string
	 */
	protected $BidGroupName;
	/**
	 * @var BidGroupStatusCodeType
	 */
	protected $BidGroupStatus;

	/**
	 * @return BidGroupItemType
	 * @param integer $index 
	 */
	function getBidGroupItem($index = null)
	{
		if ($index !== null) {
			return $this->BidGroupItem[$index];
		} else {
			return $this->BidGroupItem;
		}
	}
	/**
	 * @return void
	 * @param BidGroupItemType $value 
	 * @param  $index 
	 */
	function setBidGroupItem($value, $index = null)
	{
		if ($index !== null) {
			$this->BidGroupItem[$index] = $value;
		} else {
			$this->BidGroupItem = $value;
		}
	}
	/**
	 * @return void
	 * @param BidGroupItemType $value 
	 */
	function addBidGroupItem($value)
	{
		$this->BidGroupItem[] = $value;
	}
	/**
	 * @return long
	 */
	function getBidGroupID()
	{
		return $this->BidGroupID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setBidGroupID($value)
	{
		$this->BidGroupID = $value;
	}
	/**
	 * @return string
	 */
	function getBidGroupName()
	{
		return $this->BidGroupName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setBidGroupName($value)
	{
		$this->BidGroupName = $value;
	}
	/**
	 * @return BidGroupStatusCodeType
	 */
	function getBidGroupStatus()
	{
		return $this->BidGroupStatus;
	}
	/**
	 * @return void
	 * @param BidGroupStatusCodeType $value 
	 */
	function setBidGroupStatus($value)
	{
		$this->BidGroupStatus = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BidGroupType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'BidGroupItem' =>
					array(
						'required' => false,
						'type' => 'BidGroupItemType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'BidGroupID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BidGroupName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BidGroupStatus' =>
					array(
						'required' => false,
						'type' => 'BidGroupStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
