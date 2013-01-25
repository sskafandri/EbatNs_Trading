<?php
// autogenerated file 29.12.2011 14:18
// $Id: $
// $Log: $
//
//
require_once 'DisputeIDType.php';
require_once 'DisputeResolutionReasonCodeType.php';
require_once 'AbstractRequestType.php';

/**
 * Enables a seller to "reverse" an Unpaid Item dispute that has been closed, 
 * forexample, if buyer and seller reach an agreement. The seller's Final Value 
 * Feecredit and the buyer's strike are both reversed, if applicable.The dispute 
 * might have resultedin a strike to the buyer and a Final Value Fee credit to the 
 * seller. A buyer andseller sometimes come to agreement after a dispute has been 
 * closed. In particular,the seller might discover that the buyer actually paid, or 
 * the buyer might agreeto pay the seller's fees in exchange for having the strike 
 * removed.<br><br>A dispute can only be reversed if it was closed with 
 * DisputeActivity set toSellerEndCommunication, CameToAgreementNeedFVFCredit, 
 * orMutualAgreementOrNoBuyerResponse. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellerReverseDisputeRequestType.html
 *
 */
class SellerReverseDisputeRequestType extends AbstractRequestType
{
	/**
	 * @var DisputeIDType
	 */
	protected $DisputeID;
	/**
	 * @var DisputeResolutionReasonCodeType
	 */
	protected $DisputeResolutionReason;

	/**
	 * @return DisputeIDType
	 */
	function getDisputeID()
	{
		return $this->DisputeID;
	}
	/**
	 * @return void
	 * @param DisputeIDType $value 
	 */
	function setDisputeID($value)
	{
		$this->DisputeID = $value;
	}
	/**
	 * @return DisputeResolutionReasonCodeType
	 */
	function getDisputeResolutionReason()
	{
		return $this->DisputeResolutionReason;
	}
	/**
	 * @return void
	 * @param DisputeResolutionReasonCodeType $value 
	 */
	function setDisputeResolutionReason($value)
	{
		$this->DisputeResolutionReason = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellerReverseDisputeRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DisputeID' =>
					array(
						'required' => false,
						'type' => 'DisputeIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DisputeResolutionReason' =>
					array(
						'required' => false,
						'type' => 'DisputeResolutionReasonCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
