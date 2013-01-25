<?php
// autogenerated file 22.07.2011 08:57
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'CategoryArrayType.php';

/**
 * Contains the category data for the eBay site specified as input. The 
 * categorydata is contained in a CategoryArrayType object, within which are zero, 
 * one, ormultiple CategoryType objects. Each CategoryType object contains the 
 * detail datafor one category. Other fields tell how many categories are returned 
 * in a call,when the category hierarchy was last updated, and the version of the 
 * categoryhierarchy (all three of which can differ from one eBay site to the 
 * next). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetCategoriesResponseType.html
 *
 */
class GetCategoriesResponseType extends AbstractResponseType
{
	/**
	 * @var CategoryArrayType
	 */
	protected $CategoryArray;
	/**
	 * @var int
	 */
	protected $CategoryCount;
	/**
	 * @var dateTime
	 */
	protected $UpdateTime;
	/**
	 * @var string
	 */
	protected $CategoryVersion;
	/**
	 * @var boolean
	 */
	protected $ReservePriceAllowed;
	/**
	 * @var double
	 */
	protected $MinimumReservePrice;
	/**
	 * @var boolean
	 */
	protected $ReduceReserveAllowed;

	/**
	 * @return CategoryArrayType
	 */
	function getCategoryArray()
	{
		return $this->CategoryArray;
	}
	/**
	 * @return void
	 * @param CategoryArrayType $value 
	 */
	function setCategoryArray($value)
	{
		$this->CategoryArray = $value;
	}
	/**
	 * @return int
	 */
	function getCategoryCount()
	{
		return $this->CategoryCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setCategoryCount($value)
	{
		$this->CategoryCount = $value;
	}
	/**
	 * @return dateTime
	 */
	function getUpdateTime()
	{
		return $this->UpdateTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setUpdateTime($value)
	{
		$this->UpdateTime = $value;
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
	 * @return boolean
	 */
	function getReservePriceAllowed()
	{
		return $this->ReservePriceAllowed;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setReservePriceAllowed($value)
	{
		$this->ReservePriceAllowed = $value;
	}
	/**
	 * @return double
	 */
	function getMinimumReservePrice()
	{
		return $this->MinimumReservePrice;
	}
	/**
	 * @return void
	 * @param double $value 
	 */
	function setMinimumReservePrice($value)
	{
		$this->MinimumReservePrice = $value;
	}
	/**
	 * @return boolean
	 */
	function getReduceReserveAllowed()
	{
		return $this->ReduceReserveAllowed;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setReduceReserveAllowed($value)
	{
		$this->ReduceReserveAllowed = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetCategoriesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CategoryArray' =>
					array(
						'required' => false,
						'type' => 'CategoryArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UpdateTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryVersion' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReservePriceAllowed' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MinimumReservePrice' =>
					array(
						'required' => false,
						'type' => 'double',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReduceReserveAllowed' =>
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
