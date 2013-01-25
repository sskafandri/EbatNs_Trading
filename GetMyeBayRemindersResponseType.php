<?php
// autogenerated file 29.12.2011 14:42
// $Id: $
// $Log: $
//
//
require_once 'RemindersType.php';
require_once 'AbstractResponseType.php';

/**
 * Returns totals of various reminder types from the user's My eBay account. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetMyeBayRemindersResponseType.html
 *
 */
class GetMyeBayRemindersResponseType extends AbstractResponseType
{
	/**
	 * @var RemindersType
	 */
	protected $BuyingReminders;
	/**
	 * @var RemindersType
	 */
	protected $SellingReminders;

	/**
	 * @return RemindersType
	 */
	function getBuyingReminders()
	{
		return $this->BuyingReminders;
	}
	/**
	 * @return void
	 * @param RemindersType $value 
	 */
	function setBuyingReminders($value)
	{
		$this->BuyingReminders = $value;
	}
	/**
	 * @return RemindersType
	 */
	function getSellingReminders()
	{
		return $this->SellingReminders;
	}
	/**
	 * @return void
	 * @param RemindersType $value 
	 */
	function setSellingReminders($value)
	{
		$this->SellingReminders = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetMyeBayRemindersResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'BuyingReminders' =>
					array(
						'required' => false,
						'type' => 'RemindersType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellingReminders' =>
					array(
						'required' => false,
						'type' => 'RemindersType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
