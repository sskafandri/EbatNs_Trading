<?php
// autogenerated file 09.05.2012 12:52
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Contains data for controlling pagination in API requests.Pagination of returned 
 * data is required for some calls and notneeded in or not supported for some 
 * calls. See the documentationfor individual calls to determine whether pagination 
 * is supported,required, or desirable. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PaginationType.html
 *
 */
class PaginationType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $EntriesPerPage;
	/**
	 * @var int
	 */
	protected $PageNumber;

	/**
	 * @return int
	 */
	function getEntriesPerPage()
	{
		return $this->EntriesPerPage;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setEntriesPerPage($value)
	{
		$this->EntriesPerPage = $value;
	}
	/**
	 * @return int
	 */
	function getPageNumber()
	{
		return $this->PageNumber;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPageNumber($value)
	{
		$this->PageNumber = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PaginationType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'EntriesPerPage' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PageNumber' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
