<?php
// autogenerated file 10.09.2012 12:44
// $Id: $
// $Log: $
//
//
require_once 'BidderDetailType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * A collection of Bidder Detail. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BidderDetailArrayType.html
 *
 */
class BidderDetailArrayType extends EbatNs_ComplexType
{
	/**
	 * @var BidderDetailType
	 */
	protected $BidderDetail;

	/**
	 * @return BidderDetailType
	 * @param integer $index 
	 */
	function getBidderDetail($index = null)
	{
		if ($index !== null) {
			return $this->BidderDetail[$index];
		} else {
			return $this->BidderDetail;
		}
	}
	/**
	 * @return void
	 * @param BidderDetailType $value 
	 * @param  $index 
	 */
	function setBidderDetail($value, $index = null)
	{
		if ($index !== null) {
			$this->BidderDetail[$index] = $value;
		} else {
			$this->BidderDetail = $value;
		}
	}
	/**
	 * @return void
	 * @param BidderDetailType $value 
	 */
	function addBidderDetail($value)
	{
		$this->BidderDetail[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BidderDetailArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'BidderDetail' =>
					array(
						'required' => false,
						'type' => 'BidderDetailType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
