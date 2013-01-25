<?php
// autogenerated file 09.05.2012 13:08
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves the Product Finder XSL stylesheet. Apply the stylesheetto the XML 
 * returned from a call to GetProductFinder to render aform that lets a user form a 
 * multi-attribute query against eBaycatalog data. See the Developer's Guide for an 
 * overview of Pre-filled Item Information and information on searching for 
 * catalogproducts. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetProductFinderXSLRequestType.html
 *
 */
class GetProductFinderXSLRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $FileName;
	/**
	 * @var string
	 */
	protected $FileVersion;

	/**
	 * @return string
	 */
	function getFileName()
	{
		return $this->FileName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setFileName($value)
	{
		$this->FileName = $value;
	}
	/**
	 * @return string
	 */
	function getFileVersion()
	{
		return $this->FileVersion;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setFileVersion($value)
	{
		$this->FileVersion = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetProductFinderXSLRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'FileName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FileVersion' =>
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
