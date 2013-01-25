<?php
// autogenerated file 09.05.2012 12:52
// $Id: $
// $Log: $
//
//
require_once 'StoreCustomPageType.php';
require_once 'AbstractRequestType.php';

/**
 * Creates or updates a custom page on a user's eBay Store. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SetStoreCustomPageRequestType.html
 *
 */
class SetStoreCustomPageRequestType extends AbstractRequestType
{
	/**
	 * @var StoreCustomPageType
	 */
	protected $CustomPage;

	/**
	 * @return StoreCustomPageType
	 */
	function getCustomPage()
	{
		return $this->CustomPage;
	}
	/**
	 * @return void
	 * @param StoreCustomPageType $value 
	 */
	function setCustomPage($value)
	{
		$this->CustomPage = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SetStoreCustomPageRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CustomPage' =>
					array(
						'required' => false,
						'type' => 'StoreCustomPageType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
