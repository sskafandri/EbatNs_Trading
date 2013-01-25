<?php
// autogenerated file 10.09.2012 12:44
// $Id: $
// $Log: $
//
//
require_once 'MultiLegShipmentType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * This type splits the information about a Global Shipping Program shipment into 
 * separate containers for the domestic and international legs of the 
 * shipment.<br/><br/><span class="tablenote"><strong>Note:</strong> The Global 
 * Shipping Program is available for testing with simulated responses in the 
 * Sandbox in early July 2012. The full functionality of the Global Shipping 
 * Program will be available in August 2012.</span> 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MultiLegShippingDetailsType.html
 *
 */
class MultiLegShippingDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var MultiLegShipmentType
	 */
	protected $SellerShipmentToLogisticsProvider;
	/**
	 * @var MultiLegShipmentType
	 */
	protected $LogisticsProviderShipmentToBuyer;

	/**
	 * @return MultiLegShipmentType
	 */
	function getSellerShipmentToLogisticsProvider()
	{
		return $this->SellerShipmentToLogisticsProvider;
	}
	/**
	 * @return void
	 * @param MultiLegShipmentType $value 
	 */
	function setSellerShipmentToLogisticsProvider($value)
	{
		$this->SellerShipmentToLogisticsProvider = $value;
	}
	/**
	 * @return MultiLegShipmentType
	 */
	function getLogisticsProviderShipmentToBuyer()
	{
		return $this->LogisticsProviderShipmentToBuyer;
	}
	/**
	 * @return void
	 * @param MultiLegShipmentType $value 
	 */
	function setLogisticsProviderShipmentToBuyer($value)
	{
		$this->LogisticsProviderShipmentToBuyer = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MultiLegShippingDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SellerShipmentToLogisticsProvider' =>
					array(
						'required' => false,
						'type' => 'MultiLegShipmentType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'LogisticsProviderShipmentToBuyer' =>
					array(
						'required' => false,
						'type' => 'MultiLegShipmentType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
