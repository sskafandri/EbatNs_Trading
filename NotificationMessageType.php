<?php
// autogenerated file 29.12.2011 14:18
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * (out) A template for an SMS notification message. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/NotificationMessageType.html
 *
 */
class NotificationMessageType extends AbstractResponseType
{
	/**
	 * @var string
	 */
	protected $MessageBody;
	/**
	 * @var string
	 */
	protected $EIAS;

	/**
	 * @return string
	 */
	function getMessageBody()
	{
		return $this->MessageBody;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMessageBody($value)
	{
		$this->MessageBody = $value;
	}
	/**
	 * @return string
	 */
	function getEIAS()
	{
		return $this->EIAS;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setEIAS($value)
	{
		$this->EIAS = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('NotificationMessageType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'MessageBody' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EIAS' =>
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
