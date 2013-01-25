<?php
// autogenerated file 09.05.2012 13:08
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'EnableCodeType.php';

/**
 * Details about the store. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ProStoresDetailsType.html
 *
 */
class ProStoresDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $SellerThirdPartyUsername;
	/**
	 * @var string
	 */
	protected $StoreName;
	/**
	 * @var EnableCodeType
	 */
	protected $Status;

	/**
	 * @return string
	 */
	function getSellerThirdPartyUsername()
	{
		return $this->SellerThirdPartyUsername;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSellerThirdPartyUsername($value)
	{
		$this->SellerThirdPartyUsername = $value;
	}
	/**
	 * @return string
	 */
	function getStoreName()
	{
		return $this->StoreName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setStoreName($value)
	{
		$this->StoreName = $value;
	}
	/**
	 * @return EnableCodeType
	 */
	function getStatus()
	{
		return $this->Status;
	}
	/**
	 * @return void
	 * @param EnableCodeType $value 
	 */
	function setStatus($value)
	{
		$this->Status = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ProStoresDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SellerThirdPartyUsername' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StoreName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Status' =>
					array(
						'required' => false,
						'type' => 'EnableCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
