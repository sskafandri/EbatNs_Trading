<?php
// autogenerated file 29.12.2011 14:18
// $Id: $
// $Log: $
//
//
require_once 'StoreCustomListingHeaderLinkCodeType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Custom listing header link. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreCustomListingHeaderLinkType.html
 *
 */
class StoreCustomListingHeaderLinkType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $LinkID;
	/**
	 * @var int
	 */
	protected $Order;
	/**
	 * @var StoreCustomListingHeaderLinkCodeType
	 */
	protected $LinkType;

	/**
	 * @return int
	 */
	function getLinkID()
	{
		return $this->LinkID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setLinkID($value)
	{
		$this->LinkID = $value;
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
	 * @return StoreCustomListingHeaderLinkCodeType
	 */
	function getLinkType()
	{
		return $this->LinkType;
	}
	/**
	 * @return void
	 * @param StoreCustomListingHeaderLinkCodeType $value 
	 */
	function setLinkType($value)
	{
		$this->LinkType = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreCustomListingHeaderLinkType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'LinkID' =>
					array(
						'required' => true,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '1..1'
					),
					'Order' =>
					array(
						'required' => true,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '1..1'
					),
					'LinkType' =>
					array(
						'required' => false,
						'type' => 'StoreCustomListingHeaderLinkCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
