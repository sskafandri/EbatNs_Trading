<?php
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Status of the delivery. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ShipmentDeliveryStatusCodeType.html
 *
 * @property string Created
 * @property string DroppedOff
 * @property string InTransit
 * @property string Delivered
 * @property string Returned
 * @property string Canceled
 * @property string LabelPrinted
 * @property string Unconfirmed
 * @property string Unknown
 * @property string Error
 * @property string CustomCode
 */
class ShipmentDeliveryStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Created = 'Created';
	const CodeType_DroppedOff = 'DroppedOff';
	const CodeType_InTransit = 'InTransit';
	const CodeType_Delivered = 'Delivered';
	const CodeType_Returned = 'Returned';
	const CodeType_Canceled = 'Canceled';
	const CodeType_LabelPrinted = 'LabelPrinted';
	const CodeType_Unconfirmed = 'Unconfirmed';
	const CodeType_Unknown = 'Unknown';
	const CodeType_Error = 'Error';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ShipmentDeliveryStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ShipmentDeliveryStatusCodeType = new ShipmentDeliveryStatusCodeType();

?>
