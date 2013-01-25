<?php
// autogenerated file 09.05.2012 13:11
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/OrderStatusFilterCodeType.html
 *
 * @property string All
 * @property string AwaitingPayment
 * @property string AwaitingShipment
 * @property string PaidAndShipped
 * @property string CustomCode
 */
class OrderStatusFilterCodeType extends EbatNs_FacetType
{
	const CodeType_All = 'All';
	const CodeType_AwaitingPayment = 'AwaitingPayment';
	const CodeType_AwaitingShipment = 'AwaitingShipment';
	const CodeType_PaidAndShipped = 'PaidAndShipped';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('OrderStatusFilterCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_OrderStatusFilterCodeType = new OrderStatusFilterCodeType();

?>
