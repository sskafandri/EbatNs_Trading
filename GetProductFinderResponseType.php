<?php
// autogenerated file 09.05.2012 13:08
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * For a category that supports product finders, GetProductFinder returns an XML 
 * stringthat decribes the attributes a seller can use to form a query when 
 * searching forPre-filled Item Information, or attributes that can be used to 
 * search for listed items.Specifically, it retrieves data that you use to 
 * construct valid "product finder" queries(queries against multiple 
 * attributes).Use the results in combination with GetProductFinderXSL to render 
 * the Product Finderin a graphical user interface.See the Developer's Guide for an 
 * overview of Pre-filled Item Information and details aboutsearching for catalog 
 * products and for information about searching for listed items. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetProductFinderResponseType.html
 *
 */
class GetProductFinderResponseType extends AbstractResponseType
{
	/**
	 * @var string
	 */
	protected $AttributeSystemVersion;
	/**
	 * @var string
	 */
	protected $ProductFinderData;

	/**
	 * @return string
	 */
	function getAttributeSystemVersion()
	{
		return $this->AttributeSystemVersion;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setAttributeSystemVersion($value)
	{
		$this->AttributeSystemVersion = $value;
	}
	/**
	 * @return string
	 */
	function getProductFinderData()
	{
		return $this->ProductFinderData;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setProductFinderData($value)
	{
		$this->ProductFinderData = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetProductFinderResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'AttributeSystemVersion' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProductFinderData' =>
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
