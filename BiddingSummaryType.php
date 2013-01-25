<?php
// autogenerated file 09.05.2012 13:11
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ItemBidDetailsType.php';

/**
 * Contains bidding summary information for the bidder of an item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BiddingSummaryType.html
 *
 */
class BiddingSummaryType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $SummaryDays;
	/**
	 * @var int
	 */
	protected $TotalBids;
	/**
	 * @var int
	 */
	protected $BidActivityWithSeller;
	/**
	 * @var int
	 */
	protected $BidsToUniqueSellers;
	/**
	 * @var int
	 */
	protected $BidsToUniqueCategories;
	/**
	 * @var int
	 */
	protected $BidRetractions;
	/**
	 * @var ItemBidDetailsType
	 */
	protected $ItemBidDetails;

	/**
	 * @return int
	 */
	function getSummaryDays()
	{
		return $this->SummaryDays;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setSummaryDays($value)
	{
		$this->SummaryDays = $value;
	}
	/**
	 * @return int
	 */
	function getTotalBids()
	{
		return $this->TotalBids;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalBids($value)
	{
		$this->TotalBids = $value;
	}
	/**
	 * @return int
	 */
	function getBidActivityWithSeller()
	{
		return $this->BidActivityWithSeller;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setBidActivityWithSeller($value)
	{
		$this->BidActivityWithSeller = $value;
	}
	/**
	 * @return int
	 */
	function getBidsToUniqueSellers()
	{
		return $this->BidsToUniqueSellers;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setBidsToUniqueSellers($value)
	{
		$this->BidsToUniqueSellers = $value;
	}
	/**
	 * @return int
	 */
	function getBidsToUniqueCategories()
	{
		return $this->BidsToUniqueCategories;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setBidsToUniqueCategories($value)
	{
		$this->BidsToUniqueCategories = $value;
	}
	/**
	 * @return int
	 */
	function getBidRetractions()
	{
		return $this->BidRetractions;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setBidRetractions($value)
	{
		$this->BidRetractions = $value;
	}
	/**
	 * @return ItemBidDetailsType
	 * @param integer $index 
	 */
	function getItemBidDetails($index = null)
	{
		if ($index !== null) {
			return $this->ItemBidDetails[$index];
		} else {
			return $this->ItemBidDetails;
		}
	}
	/**
	 * @return void
	 * @param ItemBidDetailsType $value 
	 * @param  $index 
	 */
	function setItemBidDetails($value, $index = null)
	{
		if ($index !== null) {
			$this->ItemBidDetails[$index] = $value;
		} else {
			$this->ItemBidDetails = $value;
		}
	}
	/**
	 * @return void
	 * @param ItemBidDetailsType $value 
	 */
	function addItemBidDetails($value)
	{
		$this->ItemBidDetails[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BiddingSummaryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SummaryDays' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalBids' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BidActivityWithSeller' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BidsToUniqueSellers' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BidsToUniqueCategories' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BidRetractions' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemBidDetails' =>
					array(
						'required' => false,
						'type' => 'ItemBidDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
