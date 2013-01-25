<?php
// autogenerated file 09.05.2012 12:52
// $Id: $
// $Log: $
//
//
require_once 'StoreType.php';
require_once 'AbstractRequestType.php';

/**
 * Sets the configuration of the eBay store owned by the caller. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SetStoreRequestType.html
 *
 */
class SetStoreRequestType extends AbstractRequestType
{
	/**
	 * @var StoreType
	 */
	protected $Store;

	/**
	 * @return StoreType
	 */
	function getStore()
	{
		return $this->Store;
	}
	/**
	 * @return void
	 * @param StoreType $value 
	 */
	function setStore($value)
	{
		$this->Store = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SetStoreRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Store' =>
					array(
						'required' => false,
						'type' => 'StoreType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
