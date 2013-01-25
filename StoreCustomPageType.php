<?php
// autogenerated file 09.05.2012 13:11
// $Id: $
// $Log: $
//
//
require_once 'StoreCustomPageStatusCodeType.php';
require_once 'EbatNs_ComplexType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreCustomPageType.html
 *
 */
class StoreCustomPageType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $Name;
	/**
	 * @var long
	 */
	protected $PageID;
	/**
	 * @var string
	 */
	protected $URLPath;
	/**
	 * @var anyURI
	 */
	protected $URL;
	/**
	 * @var StoreCustomPageStatusCodeType
	 */
	protected $Status;
	/**
	 * @var string
	 */
	protected $Content;
	/**
	 * @var boolean
	 */
	protected $LeftNav;
	/**
	 * @var boolean
	 */
	protected $PreviewEnabled;
	/**
	 * @var int
	 */
	protected $Order;

	/**
	 * @return string
	 */
	function getName()
	{
		return $this->Name;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setName($value)
	{
		$this->Name = $value;
	}
	/**
	 * @return long
	 */
	function getPageID()
	{
		return $this->PageID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setPageID($value)
	{
		$this->PageID = $value;
	}
	/**
	 * @return string
	 */
	function getURLPath()
	{
		return $this->URLPath;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setURLPath($value)
	{
		$this->URLPath = $value;
	}
	/**
	 * @return anyURI
	 */
	function getURL()
	{
		return $this->URL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setURL($value)
	{
		$this->URL = $value;
	}
	/**
	 * @return StoreCustomPageStatusCodeType
	 */
	function getStatus()
	{
		return $this->Status;
	}
	/**
	 * @return void
	 * @param StoreCustomPageStatusCodeType $value 
	 */
	function setStatus($value)
	{
		$this->Status = $value;
	}
	/**
	 * @return string
	 */
	function getContent()
	{
		return $this->Content;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setContent($value)
	{
		$this->Content = $value;
	}
	/**
	 * @return boolean
	 */
	function getLeftNav()
	{
		return $this->LeftNav;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setLeftNav($value)
	{
		$this->LeftNav = $value;
	}
	/**
	 * @return boolean
	 */
	function getPreviewEnabled()
	{
		return $this->PreviewEnabled;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setPreviewEnabled($value)
	{
		$this->PreviewEnabled = $value;
	}
	/**
	 * @return int
	 */
	function getOrder()
	{
		return $this->Order;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setOrder($value)
	{
		$this->Order = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreCustomPageType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Name' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PageID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'URLPath' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'URL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Status' =>
					array(
						'required' => false,
						'type' => 'StoreCustomPageStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Content' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'LeftNav' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PreviewEnabled' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Order' =>
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
