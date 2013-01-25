<?php
// autogenerated file 09.05.2012 13:11
// $Id: $
// $Log: $
//
//
require_once 'StorePreferencesType.php';
require_once 'AbstractRequestType.php';

/**
 * Sets the preferences for a user's eBay Store. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SetStorePreferencesRequestType.html
 *
 */
class SetStorePreferencesRequestType extends AbstractRequestType
{
	/**
	 * @var StorePreferencesType
	 */
	protected $StorePreferences;

	/**
	 * @return StorePreferencesType
	 */
	function getStorePreferences()
	{
		return $this->StorePreferences;
	}
	/**
	 * @return void
	 * @param StorePreferencesType $value 
	 */
	function setStorePreferences($value)
	{
		$this->StorePreferences = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SetStorePreferencesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'StorePreferences' =>
					array(
						'required' => false,
						'type' => 'StorePreferencesType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
