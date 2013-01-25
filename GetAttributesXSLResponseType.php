<?php
// autogenerated file 29.12.2011 14:18
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'XSLFileType.php';

/**
 * Retrieves the Item Specifics SYI XSL stylesheet.Apply the stylesheet to theXML 
 * returned from a call to GetAttributesCS or GetProductSellingPages torender a 
 * form like the Item Specifics portion of eBay's Title and Description page.See 
 * the Developer's Guide for an overview of Item Specifics and informationon 
 * working with the XSL. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetAttributesXSLResponseType.html
 *
 */
class GetAttributesXSLResponseType extends AbstractResponseType
{
	/**
	 * @var XSLFileType
	 */
	protected $XSLFile;

	/**
	 * @return XSLFileType
	 * @param integer $index 
	 */
	function getXSLFile($index = null)
	{
		if ($index !== null) {
			return $this->XSLFile[$index];
		} else {
			return $this->XSLFile;
		}
	}
	/**
	 * @return void
	 * @param XSLFileType $value 
	 * @param  $index 
	 */
	function setXSLFile($value, $index = null)
	{
		if ($index !== null) {
			$this->XSLFile[$index] = $value;
		} else {
			$this->XSLFile = $value;
		}
	}
	/**
	 * @return void
	 * @param XSLFileType $value 
	 */
	function addXSLFile($value)
	{
		$this->XSLFile[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetAttributesXSLResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'XSLFile' =>
					array(
						'required' => false,
						'type' => 'XSLFileType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
