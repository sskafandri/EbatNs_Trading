<?php
// autogenerated file 10.09.2012 12:58
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Specifies a set of Store vacation preferences. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreVacationPreferencesType.html
 *
 */
class StoreVacationPreferencesType extends EbatNs_ComplexType
{
	/**
	 * @var boolean
	 */
	protected $OnVacation;
	/**
	 * @var dateTime
	 */
	protected $ReturnDate;
	/**
	 * @var boolean
	 */
	protected $HideFixedPriceStoreItems;
	/**
	 * @var boolean
	 */
	protected $MessageItem;
	/**
	 * @var boolean
	 */
	protected $MessageStore;
	/**
	 * @var boolean
	 */
	protected $DisplayMessageStoreCustomText;
	/**
	 * @var string
	 */
	protected $MessageStoreCustomText;

	/**
	 * @return boolean
	 */
	function getOnVacation()
	{
		return $this->OnVacation;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setOnVacation($value)
	{
		$this->OnVacation = $value;
	}
	/**
	 * @return dateTime
	 */
	function getReturnDate()
	{
		return $this->ReturnDate;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setReturnDate($value)
	{
		$this->ReturnDate = $value;
	}
	/**
	 * @return boolean
	 */
	function getHideFixedPriceStoreItems()
	{
		return $this->HideFixedPriceStoreItems;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setHideFixedPriceStoreItems($value)
	{
		$this->HideFixedPriceStoreItems = $value;
	}
	/**
	 * @return boolean
	 */
	function getMessageItem()
	{
		return $this->MessageItem;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setMessageItem($value)
	{
		$this->MessageItem = $value;
	}
	/**
	 * @return boolean
	 */
	function getMessageStore()
	{
		return $this->MessageStore;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setMessageStore($value)
	{
		$this->MessageStore = $value;
	}
	/**
	 * @return boolean
	 */
	function getDisplayMessageStoreCustomText()
	{
		return $this->DisplayMessageStoreCustomText;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDisplayMessageStoreCustomText($value)
	{
		$this->DisplayMessageStoreCustomText = $value;
	}
	/**
	 * @return string
	 */
	function getMessageStoreCustomText()
	{
		return $this->MessageStoreCustomText;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMessageStoreCustomText($value)
	{
		$this->MessageStoreCustomText = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreVacationPreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'OnVacation' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReturnDate' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'HideFixedPriceStoreItems' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MessageItem' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MessageStore' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DisplayMessageStoreCustomText' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MessageStoreCustomText' =>
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
