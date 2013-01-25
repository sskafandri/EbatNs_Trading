<?php
// autogenerated file 22.07.2011 08:57
// $Id: $
// $Log: $
//
//
require_once 'FeesType.php';
require_once 'SellingManagerProductDetailsType.php';
require_once 'AbstractResponseType.php';

/**
 * Returns the template ID and the estimated fees for the revised listing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ReviseSellingManagerTemplateResponseType.html
 *
 */
class ReviseSellingManagerTemplateResponseType extends AbstractResponseType
{
	/**
	 * @var long
	 */
	protected $SaleTemplateID;
	/**
	 * @var FeesType
	 */
	protected $Fees;
	/**
	 * @var string
	 */
	protected $CategoryID;
	/**
	 * @var string
	 */
	protected $Category2ID;
	/**
	 * @var boolean
	 */
	protected $VerifyOnly;
	/**
	 * @var string
	 */
	protected $SaleTemplateName;
	/**
	 * @var SellingManagerProductDetailsType
	 */
	protected $SellingManagerProductDetails;

	/**
	 * @return long
	 */
	function getSaleTemplateID()
	{
		return $this->SaleTemplateID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setSaleTemplateID($value)
	{
		$this->SaleTemplateID = $value;
	}
	/**
	 * @return FeesType
	 */
	function getFees()
	{
		return $this->Fees;
	}
	/**
	 * @return void
	 * @param FeesType $value 
	 */
	function setFees($value)
	{
		$this->Fees = $value;
	}
	/**
	 * @return string
	 */
	function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}
	/**
	 * @return string
	 */
	function getCategory2ID()
	{
		return $this->Category2ID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategory2ID($value)
	{
		$this->Category2ID = $value;
	}
	/**
	 * @return boolean
	 */
	function getVerifyOnly()
	{
		return $this->VerifyOnly;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setVerifyOnly($value)
	{
		$this->VerifyOnly = $value;
	}
	/**
	 * @return string
	 */
	function getSaleTemplateName()
	{
		return $this->SaleTemplateName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSaleTemplateName($value)
	{
		$this->SaleTemplateName = $value;
	}
	/**
	 * @return SellingManagerProductDetailsType
	 */
	function getSellingManagerProductDetails()
	{
		return $this->SellingManagerProductDetails;
	}
	/**
	 * @return void
	 * @param SellingManagerProductDetailsType $value 
	 */
	function setSellingManagerProductDetails($value)
	{
		$this->SellingManagerProductDetails = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ReviseSellingManagerTemplateResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SaleTemplateID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Fees' =>
					array(
						'required' => false,
						'type' => 'FeesType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Category2ID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'VerifyOnly' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SaleTemplateName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellingManagerProductDetails' =>
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
