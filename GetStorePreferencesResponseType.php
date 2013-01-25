<?php
// autogenerated file 09.05.2012 12:52
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'StorePreferencesType.php';

/**
 * Contains the Store preferences retrieved for a user. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetStorePreferencesResponseType.html
 *
 */
class GetStorePreferencesResponseType extends AbstractResponseType
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
		parent::__construct('GetStorePreferencesResponseType', 'urn:ebay:apis:eBLBaseComponents');
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
