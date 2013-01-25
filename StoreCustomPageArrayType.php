<?php
// autogenerated file 09.05.2012 12:48
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'StoreCustomPageType.php';

/**
 * Set of Store custom pages. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreCustomPageArrayType.html
 *
 */
class StoreCustomPageArrayType extends EbatNs_ComplexType
{
	/**
	 * @var StoreCustomPageType
	 */
	protected $CustomPage;

	/**
	 * @return StoreCustomPageType
	 * @param integer $index 
	 */
	function getCustomPage($index = null)
	{
		if ($index !== null) {
			return $this->CustomPage[$index];
		} else {
			return $this->CustomPage;
		}
	}
	/**
	 * @return void
	 * @param StoreCustomPageType $value 
	 * @param  $index 
	 */
	function setCustomPage($value, $index = null)
	{
		if ($index !== null) {
			$this->CustomPage[$index] = $value;
		} else {
			$this->CustomPage = $value;
		}
	}
	/**
	 * @return void
	 * @param StoreCustomPageType $value 
	 */
	function addCustomPage($value)
	{
		$this->CustomPage[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreCustomPageArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CustomPage' =>
					array(
						'required' => false,
						'type' => 'StoreCustomPageType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
