<?php
// autogenerated file 22.07.2011 09:17
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Retrieves an XML string that describes how to present catalog product 
 * informationto a seller. Use this information to present users with the 
 * equivalent of the ItemSpecifics portion of the eBay Title and Description pages 
 * and to validate user-specified values for eBay attributes on the client before 
 * including them in anAddItem call or related calls. Use the results in 
 * combination withGetAttributesXSL to render the Item Specifics in a graphical 
 * user interface. Seethe Developer's Guide for an overview of Pre-filled Item 
 * Information and detailsabout searching for catalog products. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetProductSellingPagesResponseType.html
 *
 */
class GetProductSellingPagesResponseType extends AbstractResponseType
{
	/**
	 * @var string
	 */
	protected $ProductSellingPagesData;

	/**
	 * @return string
	 */
	function getProductSellingPagesData()
	{
		return $this->ProductSellingPagesData;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setProductSellingPagesData($value)
	{
		$this->ProductSellingPagesData = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetProductSellingPagesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ProductSellingPagesData' =>
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
