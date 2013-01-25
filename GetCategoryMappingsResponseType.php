<?php
// autogenerated file 09.05.2012 13:14
// $Id: $
// $Log: $
//
//
require_once 'CategoryMappingType.php';
require_once 'AbstractResponseType.php';

/**
 * Returns a map of old category IDs and corresponding active category IDs 
 * definedfor the site to which the request was sent. Typically used to update an 
 * older itemdefinition with a new category ID prior to listing the item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetCategoryMappingsResponseType.html
 *
 */
class GetCategoryMappingsResponseType extends AbstractResponseType
{
	/**
	 * @var CategoryMappingType
	 */
	protected $CategoryMapping;
	/**
	 * @var string
	 */
	protected $CategoryVersion;

	/**
	 * @return CategoryMappingType
	 * @param integer $index 
	 */
	function getCategoryMapping($index = null)
	{
		if ($index !== null) {
			return $this->CategoryMapping[$index];
		} else {
			return $this->CategoryMapping;
		}
	}
	/**
	 * @return void
	 * @param CategoryMappingType $value 
	 * @param  $index 
	 */
	function setCategoryMapping($value, $index = null)
	{
		if ($index !== null) {
			$this->CategoryMapping[$index] = $value;
		} else {
			$this->CategoryMapping = $value;
		}
	}
	/**
	 * @return void
	 * @param CategoryMappingType $value 
	 */
	function addCategoryMapping($value)
	{
		$this->CategoryMapping[] = $value;
	}
	/**
	 * @return string
	 */
	function getCategoryVersion()
	{
		return $this->CategoryVersion;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategoryVersion($value)
	{
		$this->CategoryVersion = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetCategoryMappingsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CategoryMapping' =>
					array(
						'required' => false,
						'type' => 'CategoryMappingType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'CategoryVersion' =>
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
