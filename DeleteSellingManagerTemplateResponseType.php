<?php
// autogenerated file 10.09.2012 12:44
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Response for deleting a Selling Manager template. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DeleteSellingManagerTemplateResponseType.html
 *
 */
class DeleteSellingManagerTemplateResponseType extends AbstractResponseType
{
	/**
	 * @var string
	 */
	protected $DeletedSaleTemplateID;
	/**
	 * @var string
	 */
	protected $DeletedSaleTemplateName;

	/**
	 * @return string
	 */
	function getDeletedSaleTemplateID()
	{
		return $this->DeletedSaleTemplateID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDeletedSaleTemplateID($value)
	{
		$this->DeletedSaleTemplateID = $value;
	}
	/**
	 * @return string
	 */
	function getDeletedSaleTemplateName()
	{
		return $this->DeletedSaleTemplateName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDeletedSaleTemplateName($value)
	{
		$this->DeletedSaleTemplateName = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DeleteSellingManagerTemplateResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DeletedSaleTemplateID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DeletedSaleTemplateName' =>
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
