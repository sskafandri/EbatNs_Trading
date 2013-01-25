<?php
// autogenerated file 09.05.2012 13:04
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'StoreCustomCategoryType.php';

/**
 * Configuration of a store custom category. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreCustomCategoryType.html
 *
 */
class StoreCustomCategoryType extends EbatNs_ComplexType
{
	/**
	 * @var long
	 */
	protected $CategoryID;
	/**
	 * @var string
	 */
	protected $Name;
	/**
	 * @var int
	 */
	protected $Order;
	/**
	 * @var StoreCustomCategoryType
	 */
	protected $ChildCategory;

	/**
	 * @return long
	 */
	function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}
	/**
	 * @return string
	 */
	function getName()
	{
		return $this->Name;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setName($value)
	{
		$this->Name = $value;
	}
	/**
	 * @return int
	 */
	function getOrder()
	{
		return $this->Order;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setOrder($value)
	{
		$this->Order = $value;
	}
	/**
	 * @return StoreCustomCategoryType
	 * @param integer $index 
	 */
	function getChildCategory($index = null)
	{
		if ($index !== null) {
			return $this->ChildCategory[$index];
		} else {
			return $this->ChildCategory;
		}
	}
	/**
	 * @return void
	 * @param StoreCustomCategoryType $value 
	 * @param  $index 
	 */
	function setChildCategory($value, $index = null)
	{
		if ($index !== null) {
			$this->ChildCategory[$index] = $value;
		} else {
			$this->ChildCategory = $value;
		}
	}
	/**
	 * @return void
	 * @param StoreCustomCategoryType $value 
	 */
	function addChildCategory($value)
	{
		$this->ChildCategory[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreCustomCategoryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CategoryID' =>
					array(
						'required' => true,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '1..1'
					),
					'Name' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Order' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ChildCategory' =>
					array(
						'required' => false,
						'type' => 'StoreCustomCategoryType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
