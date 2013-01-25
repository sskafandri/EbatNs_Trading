<?php
// autogenerated file 22.07.2011 08:57
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Status values for the processing progress for the category structure 
 * changesspecified by a SetStoreCategories request. If the SetStoreCategories call 
 * isprocessed asynchronously, then the status is returned 
 * byGetStoreCategoryUpdateStatus, otherwise, the status is returned in 
 * theSetStoreCategories response. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/TaskStatusCodeType.html
 *
 * @property string Pending
 * @property string InProgress
 * @property string Complete
 * @property string Failed
 * @property string CustomCode
 */
class TaskStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Pending = 'Pending';
	const CodeType_InProgress = 'InProgress';
	const CodeType_Complete = 'Complete';
	const CodeType_Failed = 'Failed';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('TaskStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_TaskStatusCodeType = new TaskStatusCodeType();

?>
