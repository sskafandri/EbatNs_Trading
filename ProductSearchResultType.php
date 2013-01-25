<?php
// autogenerated file 10.09.2012 12:41
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ResponseAttributeSetType.php';

/**
 * Container for the results of a product query.Supports Pre-filled Product 
 * Information functionality.See the Developer's Guide for more information about 
 * working with this data. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ProductSearchResultType.html
 *
 */
class ProductSearchResultType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $ID;
	/**
	 * @var string
	 */
	protected $NumProducts;
	/**
	 * @var ResponseAttributeSetType
	 */
	protected $AttributeSet;
	/**
	 * @var boolean
	 */
	protected $DisplayStockPhotos;

	/**
	 * @return string
	 */
	function getID()
	{
		return $this->ID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setID($value)
	{
		$this->ID = $value;
	}
	/**
	 * @return string
	 */
	function getNumProducts()
	{
		return $this->NumProducts;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setNumProducts($value)
	{
		$this->NumProducts = $value;
	}
	/**
	 * @return ResponseAttributeSetType
	 * @param integer $index 
	 */
	function getAttributeSet($index = null)
	{
		if ($index !== null) {
			return $this->AttributeSet[$index];
		} else {
			return $this->AttributeSet;
		}
	}
	/**
	 * @return void
	 * @param ResponseAttributeSetType $value 
	 * @param  $index 
	 */
	function setAttributeSet($value, $index = null)
	{
		if ($index !== null) {
			$this->AttributeSet[$index] = $value;
		} else {
			$this->AttributeSet = $value;
		}
	}
	/**
	 * @return void
	 * @param ResponseAttributeSetType $value 
	 */
	function addAttributeSet($value)
	{
		$this->AttributeSet[] = $value;
	}
	/**
	 * @return boolean
	 */
	function getDisplayStockPhotos()
	{
		return $this->DisplayStockPhotos;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDisplayStockPhotos($value)
	{
		$this->DisplayStockPhotos = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ProductSearchResultType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'NumProducts' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AttributeSet' =>
					array(
						'required' => false,
						'type' => 'ResponseAttributeSetType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'DisplayStockPhotos' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
