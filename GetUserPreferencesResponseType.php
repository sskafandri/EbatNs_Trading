<?php
// autogenerated file 10.09.2012 12:41
// $Id: $
// $Log: $
//
//
require_once 'BidderNoticePreferencesType.php';
require_once 'SellerFavoriteItemPreferencesType.php';
require_once 'PurchaseReminderEmailPreferencesType.php';
require_once 'ProStoresCheckoutPreferenceType.php';
require_once 'AbstractResponseType.php';
require_once 'UnpaidItemAssistancePreferencesType.php';
require_once 'CrossPromotionPreferencesType.php';
require_once 'SellerPaymentPreferencesType.php';
require_once 'SellerExcludeShipToLocationPreferencesType.php';
require_once 'CombinedPaymentPreferencesType.php';
require_once 'EndOfAuctionEmailPreferencesType.php';
require_once 'SellerProfilePreferencesType.php';

/**
 * Contains some or all of the authenticated user's preferences. The preferences 
 * aregrouped in sets and are returned according to the flag settings in the 
 * request. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetUserPreferencesResponseType.html
 *
 */
class GetUserPreferencesResponseType extends AbstractResponseType
{
	/**
	 * @var BidderNoticePreferencesType
	 */
	protected $BidderNoticePreferences;
	/**
	 * @var CombinedPaymentPreferencesType
	 */
	protected $CombinedPaymentPreferences;
	/**
	 * @var CrossPromotionPreferencesType
	 */
	protected $CrossPromotionPreferences;
	/**
	 * @var SellerPaymentPreferencesType
	 */
	protected $SellerPaymentPreferences;
	/**
	 * @var SellerFavoriteItemPreferencesType
	 */
	protected $SellerFavoriteItemPreferences;
	/**
	 * @var EndOfAuctionEmailPreferencesType
	 */
	protected $EndOfAuctionEmailPreferences;
	/**
	 * @var boolean
	 */
	protected $EmailShipmentTrackingNumberPreference;
	/**
	 * @var boolean
	 */
	protected $RequiredShipPhoneNumberPreference;
	/**
	 * @var ProStoresCheckoutPreferenceType
	 */
	protected $ProStoresPreference;
	/**
	 * @var UnpaidItemAssistancePreferencesType
	 */
	protected $UnpaidItemAssistancePreferences;
	/**
	 * @var SellerExcludeShipToLocationPreferencesType
	 */
	protected $SellerExcludeShipToLocationPreferences;
	/**
	 * @var PurchaseReminderEmailPreferencesType
	 */
	protected $PurchaseReminderEmailPreferences;
	/**
	 * @var boolean
	 */
	protected $SellerThirdPartyCheckoutDisabled;
	/**
	 * @var SellerProfilePreferencesType
	 */
	protected $SellerProfilePreferences;

	/**
	 * @return BidderNoticePreferencesType
	 */
	function getBidderNoticePreferences()
	{
		return $this->BidderNoticePreferences;
	}
	/**
	 * @return void
	 * @param BidderNoticePreferencesType $value 
	 */
	function setBidderNoticePreferences($value)
	{
		$this->BidderNoticePreferences = $value;
	}
	/**
	 * @return CombinedPaymentPreferencesType
	 */
	function getCombinedPaymentPreferences()
	{
		return $this->CombinedPaymentPreferences;
	}
	/**
	 * @return void
	 * @param CombinedPaymentPreferencesType $value 
	 */
	function setCombinedPaymentPreferences($value)
	{
		$this->CombinedPaymentPreferences = $value;
	}
	/**
	 * @return CrossPromotionPreferencesType
	 */
	function getCrossPromotionPreferences()
	{
		return $this->CrossPromotionPreferences;
	}
	/**
	 * @return void
	 * @param CrossPromotionPreferencesType $value 
	 */
	function setCrossPromotionPreferences($value)
	{
		$this->CrossPromotionPreferences = $value;
	}
	/**
	 * @return SellerPaymentPreferencesType
	 */
	function getSellerPaymentPreferences()
	{
		return $this->SellerPaymentPreferences;
	}
	/**
	 * @return void
	 * @param SellerPaymentPreferencesType $value 
	 */
	function setSellerPaymentPreferences($value)
	{
		$this->SellerPaymentPreferences = $value;
	}
	/**
	 * @return SellerFavoriteItemPreferencesType
	 */
	function getSellerFavoriteItemPreferences()
	{
		return $this->SellerFavoriteItemPreferences;
	}
	/**
	 * @return void
	 * @param SellerFavoriteItemPreferencesType $value 
	 */
	function setSellerFavoriteItemPreferences($value)
	{
		$this->SellerFavoriteItemPreferences = $value;
	}
	/**
	 * @return EndOfAuctionEmailPreferencesType
	 */
	function getEndOfAuctionEmailPreferences()
	{
		return $this->EndOfAuctionEmailPreferences;
	}
	/**
	 * @return void
	 * @param EndOfAuctionEmailPreferencesType $value 
	 */
	function setEndOfAuctionEmailPreferences($value)
	{
		$this->EndOfAuctionEmailPreferences = $value;
	}
	/**
	 * @return boolean
	 */
	function getEmailShipmentTrackingNumberPreference()
	{
		return $this->EmailShipmentTrackingNumberPreference;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setEmailShipmentTrackingNumberPreference($value)
	{
		$this->EmailShipmentTrackingNumberPreference = $value;
	}
	/**
	 * @return boolean
	 */
	function getRequiredShipPhoneNumberPreference()
	{
		return $this->RequiredShipPhoneNumberPreference;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setRequiredShipPhoneNumberPreference($value)
	{
		$this->RequiredShipPhoneNumberPreference = $value;
	}
	/**
	 * @return ProStoresCheckoutPreferenceType
	 */
	function getProStoresPreference()
	{
		return $this->ProStoresPreference;
	}
	/**
	 * @return void
	 * @param ProStoresCheckoutPreferenceType $value 
	 */
	function setProStoresPreference($value)
	{
		$this->ProStoresPreference = $value;
	}
	/**
	 * @return UnpaidItemAssistancePreferencesType
	 */
	function getUnpaidItemAssistancePreferences()
	{
		return $this->UnpaidItemAssistancePreferences;
	}
	/**
	 * @return void
	 * @param UnpaidItemAssistancePreferencesType $value 
	 */
	function setUnpaidItemAssistancePreferences($value)
	{
		$this->UnpaidItemAssistancePreferences = $value;
	}
	/**
	 * @return SellerExcludeShipToLocationPreferencesType
	 */
	function getSellerExcludeShipToLocationPreferences()
	{
		return $this->SellerExcludeShipToLocationPreferences;
	}
	/**
	 * @return void
	 * @param SellerExcludeShipToLocationPreferencesType $value 
	 */
	function setSellerExcludeShipToLocationPreferences($value)
	{
		$this->SellerExcludeShipToLocationPreferences = $value;
	}
	/**
	 * @return PurchaseReminderEmailPreferencesType
	 */
	function getPurchaseReminderEmailPreferences()
	{
		return $this->PurchaseReminderEmailPreferences;
	}
	/**
	 * @return void
	 * @param PurchaseReminderEmailPreferencesType $value 
	 */
	function setPurchaseReminderEmailPreferences($value)
	{
		$this->PurchaseReminderEmailPreferences = $value;
	}
	/**
	 * @return boolean
	 */
	function getSellerThirdPartyCheckoutDisabled()
	{
		return $this->SellerThirdPartyCheckoutDisabled;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setSellerThirdPartyCheckoutDisabled($value)
	{
		$this->SellerThirdPartyCheckoutDisabled = $value;
	}
	/**
	 * @return SellerProfilePreferencesType
	 */
	function getSellerProfilePreferences()
	{
		return $this->SellerProfilePreferences;
	}
	/**
	 * @return void
	 * @param SellerProfilePreferencesType $value 
	 */
	function setSellerProfilePreferences($value)
	{
		$this->SellerProfilePreferences = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetUserPreferencesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'BidderNoticePreferences' =>
					array(
						'required' => false,
						'type' => 'BidderNoticePreferencesType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CombinedPaymentPreferences' =>
					array(
						'required' => false,
						'type' => 'CombinedPaymentPreferencesType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CrossPromotionPreferences' =>
					array(
						'required' => false,
						'type' => 'CrossPromotionPreferencesType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerPaymentPreferences' =>
					array(
						'required' => false,
						'type' => 'SellerPaymentPreferencesType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerFavoriteItemPreferences' =>
					array(
						'required' => false,
						'type' => 'SellerFavoriteItemPreferencesType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EndOfAuctionEmailPreferences' =>
					array(
						'required' => false,
						'type' => 'EndOfAuctionEmailPreferencesType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EmailShipmentTrackingNumberPreference' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RequiredShipPhoneNumberPreference' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProStoresPreference' =>
					array(
						'required' => false,
						'type' => 'ProStoresCheckoutPreferenceType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UnpaidItemAssistancePreferences' =>
					array(
						'required' => false,
						'type' => 'UnpaidItemAssistancePreferencesType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerExcludeShipToLocationPreferences' =>
					array(
						'required' => false,
						'type' => 'SellerExcludeShipToLocationPreferencesType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PurchaseReminderEmailPreferences' =>
					array(
						'required' => false,
						'type' => 'PurchaseReminderEmailPreferencesType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerThirdPartyCheckoutDisabled' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerProfilePreferences' =>
					array(
						'required' => false,
						'type' => 'SellerProfilePreferencesType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
