<?php
// autogenerated file 09.05.2012 13:11
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * This type defines the <b>ShippingCategoryDetails</b> container. When the 
 * <b>DetailName</b> fieldis set to ShippingCategoryDetails in a GeteBayDetails 
 * request, one<b>ShippingCategoryDetails</b> container is returned for each valid 
 * shipping categoryused on the eBay site. Besides being useful to view the list of 
 * valid shippingcategories, this container is also useful to discover when the 
 * last update toshipping categories was made by eBay. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ShippingCategoryDetailsType.html
 *
 */
class ShippingCategoryDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var token
	 */
	protected $ShippingCategory;
	/**
	 * @var string
	 */
	protected $Description;
	/**
	 * @var string
	 */
	protected $DetailVersion;
	/**
	 * @var dateTime
	 */
	protected $UpdateTime;

	/**
	 * @return token
	 */
	function getShippingCategory()
	{
		return $this->ShippingCategory;
	}
	/**
	 * @return void
	 * @param token $value 
	 */
	function setShippingCategory($value)
	{
		$this->ShippingCategory = $value;
	}
	/**
	 * @return string
	 */
	function getDescription()
	{
		return $this->Description;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDescription($value)
	{
		$this->Description = $value;
	}
	/**
	 * @return string
	 */
	function getDetailVersion()
	{
		return $this->DetailVersion;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDetailVersion($value)
	{
		$this->DetailVersion = $value;
	}
	/**
	 * @return dateTime
	 */
	function getUpdateTime()
	{
		return $this->UpdateTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setUpdateTime($value)
	{
		$this->UpdateTime = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ShippingCategoryDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ShippingCategory' =>
					array(
						'required' => false,
						'type' => 'token',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Description' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DetailVersion' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UpdateTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
