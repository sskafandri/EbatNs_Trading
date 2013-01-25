<?php
// autogenerated file 29.12.2011 14:42
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * LeaveFeedback response message includes an acknowledgement if the feedback was 
 * successfully left. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/LeaveFeedbackResponseType.html
 *
 */
class LeaveFeedbackResponseType extends AbstractResponseType
{
	/**
	 * @var string
	 */
	protected $FeedbackID;

	/**
	 * @return string
	 */
	function getFeedbackID()
	{
		return $this->FeedbackID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setFeedbackID($value)
	{
		$this->FeedbackID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('LeaveFeedbackResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'FeedbackID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
