<?php
// autogenerated file 09.05.2012 13:19
// $Id: $
// $Log: $
//
//
require_once 'ProductSearchType.php';
require_once 'ProductSortCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'AffiliateTrackingDetailsType.php';

/**
 * No longer recommended. This supports an older ID-based format for describing 
 * item specifics and product details.Most eBay categories no longer support 
 * ID-based attributes.The remaining categories (e.g., US eBay Motors) will drop 
 * support for ID-based attributes by May 2012. New applications should not use 
 * ID-based attributes. Existing applications should be updated to remove all 
 * dependencieson ID-based attributes now. Instead, use FindProducts in eBay's 
 * Shopping API to search for product details.<br><br>Searches for stock 
 * information and reviews for certain kinds of products,such as a particular 
 * digital camera model.<p>GetProducts is designed to be useful to applications 
 * that supportshopping comparison, product reviews, or basic supply anddemand 
 * data.</p><p>GetProducts also supports tracking so that members of theeBay 
 * Affiliates Program can get commissions for driving traffic to eBay.</p><p 
 * class="tablenote"><b>Note:</b>For selling use cases, use GetProductSearchResults 
 * andGetProductSellingPages instead.</p><p>To use this call, you typically pass in 
 * keywords, and GetProducts findsproducts with matching words in the product 
 * title, description, and/orItem Specifics.<p>For each product of interest, you 
 * call GetProducts again to retrieveadditional details that would be useful to 
 * buyers:</p><ul><li>Top reviews of the product by eBay members,including part of 
 * the review text, plus links to the full text on theeBay Web 
 * site.</li><li>Relevant buying guides (shopping advice) written byeBay members 
 * and by eBay staff, including part of the guide text,plus links to the full 
 * texton the eBay Web site.</li><li>Up to 200 matching items on eBay (if any). (To 
 * find more matchingitems, use the <a 
 * href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html">Finding 
 * API</a>.)</li></ul><p><span class="tablenote"><b>Note:</b>As catalog queries can 
 * take longer than item queries.Also, due to the way product data is cached, you 
 * may get a faster responsewhen you run the same query a second time.</span> 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetProductsRequestType.html
 *
 */
class GetProductsRequestType extends AbstractRequestType
{
	/**
	 * @var ProductSearchType
	 */
	protected $ProductSearch;
	/**
	 * @var ProductSortCodeType
	 */
	protected $ProductSort;
	/**
	 * @var boolean
	 */
	protected $IncludeItemArray;
	/**
	 * @var boolean
	 */
	protected $IncludeReviewDetails;
	/**
	 * @var boolean
	 */
	protected $IncludeBuyingGuideDetails;
	/**
	 * @var boolean
	 */
	protected $IncludeHistogram;
	/**
	 * @var AffiliateTrackingDetailsType
	 */
	protected $AffiliateTrackingDetails;
	/**
	 * @var boolean
	 */
	protected $HideDuplicateItems;

	/**
	 * @return ProductSearchType
	 */
	function getProductSearch()
	{
		return $this->ProductSearch;
	}
	/**
	 * @return void
	 * @param ProductSearchType $value 
	 */
	function setProductSearch($value)
	{
		$this->ProductSearch = $value;
	}
	/**
	 * @return ProductSortCodeType
	 */
	function getProductSort()
	{
		return $this->ProductSort;
	}
	/**
	 * @return void
	 * @param ProductSortCodeType $value 
	 */
	function setProductSort($value)
	{
		$this->ProductSort = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeItemArray()
	{
		return $this->IncludeItemArray;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeItemArray($value)
	{
		$this->IncludeItemArray = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeReviewDetails()
	{
		return $this->IncludeReviewDetails;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeReviewDetails($value)
	{
		$this->IncludeReviewDetails = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeBuyingGuideDetails()
	{
		return $this->IncludeBuyingGuideDetails;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeBuyingGuideDetails($value)
	{
		$this->IncludeBuyingGuideDetails = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeHistogram()
	{
		return $this->IncludeHistogram;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeHistogram($value)
	{
		$this->IncludeHistogram = $value;
	}
	/**
	 * @return AffiliateTrackingDetailsType
	 */
	function getAffiliateTrackingDetails()
	{
		return $this->AffiliateTrackingDetails;
	}
	/**
	 * @return void
	 * @param AffiliateTrackingDetailsType $value 
	 */
	function setAffiliateTrackingDetails($value)
	{
		$this->AffiliateTrackingDetails = $value;
	}
	/**
	 * @return boolean
	 */
	function getHideDuplicateItems()
	{
		return $this->HideDuplicateItems;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setHideDuplicateItems($value)
	{
		$this->HideDuplicateItems = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetProductsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ProductSearch' =>
					array(
						'required' => false,
						'type' => 'ProductSearchType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProductSort' =>
					array(
						'required' => false,
						'type' => 'ProductSortCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeItemArray' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeReviewDetails' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeBuyingGuideDetails' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeHistogram' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AffiliateTrackingDetails' =>
					array(
						'required' => false,
						'type' => 'AffiliateTrackingDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'HideDuplicateItems' =>
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
