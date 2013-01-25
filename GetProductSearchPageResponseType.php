<?php
// autogenerated file 10.09.2012 12:58
// $Id: $
// $Log: $
//
//
require_once 'ProductSearchPageType.php';
require_once 'AbstractResponseType.php';

/**
 * For a category that is catalog-enabled, GetProductSearchPage retrieves 
 * theattributes a seller can use to form a query when searching for Pre-filled 
 * ItemInformation. See the Developer's Guide for an overview of Pre-filled 
 * ItemInformation and details about searching for catalog products. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetProductSearchPageResponseType.html
 *
 */
class GetProductSearchPageResponseType extends AbstractResponseType
{
	/**
	 * @var string
	 */
	protected $AttributeSystemVersion;
	/**
	 * @var ProductSearchPageType
	 */
	protected $ProductSearchPage;

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
	 * @return ProductSearchPageType
	 * @param integer $index 
	 */
	function getProductSearchPage($index = null)
	{
		if ($index !== null) {
			return $this->ProductSearchPage[$index];
		} else {
			return $this->ProductSearchPage;
		}
	}
	/**
	 * @return void
	 * @param ProductSearchPageType $value 
	 * @param  $index 
	 */
	function setProductSearchPage($value, $index = null)
	{
		if ($index !== null) {
			$this->ProductSearchPage[$index] = $value;
		} else {
			$this->ProductSearchPage = $value;
		}
	}
	/**
	 * @return void
	 * @param ProductSearchPageType $value 
	 */
	function addProductSearchPage($value)
	{
		$this->ProductSearchPage[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetProductSearchPageResponseType', 'urn:ebay:apis:eBLBaseComponents');
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
					'ProductSearchPage' =>
					array(
						'required' => false,
						'type' => 'ProductSearchPageType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
