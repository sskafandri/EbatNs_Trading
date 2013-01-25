<?php
// autogenerated file 10.09.2012 12:49
// $Id: $
// $Log: $
//
//
require_once 'ASQPreferencesType.php';
require_once 'AbstractResponseType.php';

/**
 * Contains the ASQ subjects for the user specified in the request. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetMessagePreferencesResponseType.html
 *
 */
class GetMessagePreferencesResponseType extends AbstractResponseType
{
	/**
	 * @var ASQPreferencesType
	 */
	protected $ASQPreferences;

	/**
	 * @return ASQPreferencesType
	 */
	function getASQPreferences()
	{
		return $this->ASQPreferences;
	}
	/**
	 * @return void
	 * @param ASQPreferencesType $value 
	 */
	function setASQPreferences($value)
	{
		$this->ASQPreferences = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetMessagePreferencesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ASQPreferences' =>
					array(
						'required' => false,
						'type' => 'ASQPreferencesType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
