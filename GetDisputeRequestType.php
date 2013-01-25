<?php
// autogenerated file 29.12.2011 14:18
// $Id: $
// $Log: $
//
//
require_once 'DisputeIDType.php';
require_once 'AbstractRequestType.php';

/**
 * Retrieves the details of a specific eBay dispute corresponding to the supplied 
 * dispute ID. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetDisputeRequestType.html
 *
 */
class GetDisputeRequestType extends AbstractRequestType
{
	/**
	 * @var DisputeIDType
	 */
	protected $DisputeID;

	/**
	 * @return DisputeIDType
	 */
	function getDisputeID()
	{
		return $this->DisputeID;
	}
	/**
	 * @return void
	 * @param DisputeIDType $value 
	 */
	function setDisputeID($value)
	{
		$this->DisputeID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetDisputeRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DisputeID' =>
					array(
						'required' => false,
						'type' => 'DisputeIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
