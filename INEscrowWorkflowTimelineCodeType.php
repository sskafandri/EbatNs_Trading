<?php
// autogenerated file 09.05.2012 12:48
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Used to indicate whether Default, WorkFlow A or WorkFlow B is applicable for a 
 * category. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/INEscrowWorkflowTimelineCodeType.html
 *
 * @property string Default
 * @property string WorkflowA
 * @property string WorkflowB
 * @property string CustomCode
 */
class INEscrowWorkflowTimelineCodeType extends EbatNs_FacetType
{
	const CodeType_Default = 'Default';
	const CodeType_WorkflowA = 'WorkflowA';
	const CodeType_WorkflowB = 'WorkflowB';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('INEscrowWorkflowTimelineCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_INEscrowWorkflowTimelineCodeType = new INEscrowWorkflowTimelineCodeType();

?>
