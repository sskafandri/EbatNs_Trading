<?php
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'SellingManagerProductDetailsType.php';
require_once 'AbstractResponseType.php';

/**
 * Response for deleting a Selling Manager product. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DeleteSellingManagerProductResponseType.html
 *
 */
class DeleteSellingManagerProductResponseType extends AbstractResponseType
{
	/**
	 * @var SellingManagerProductDetailsType
	 */
	protected $DeletedSellingManagerProductDetails;

	/**
	 * @return SellingManagerProductDetailsType
	 */
	function getDeletedSellingManagerProductDetails()
	{
		return $this->DeletedSellingManagerProductDetails;
	}
	/**
	 * @return void
	 * @param SellingManagerProductDetailsType $value 
	 */
	function setDeletedSellingManagerProductDetails($value)
	{
		$this->DeletedSellingManagerProductDetails = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DeleteSellingManagerProductResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DeletedSellingManagerProductDetails' =>
					array(
						'required' => false,
						'type' => 'SellingManagerProductDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
