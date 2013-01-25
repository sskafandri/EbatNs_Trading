<?php
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Requests to enable a test user to sell items in the Sandbox environment. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ValidateTestUserRegistrationRequestType.html
 *
 */
class ValidateTestUserRegistrationRequestType extends AbstractRequestType
{
	/**
	 * @var int
	 */
	protected $FeedbackScore;
	/**
	 * @var dateTime
	 */
	protected $RegistrationDate;
	/**
	 * @var boolean
	 */
	protected $SubscribeSA;
	/**
	 * @var boolean
	 */
	protected $SubscribeSAPro;
	/**
	 * @var boolean
	 */
	protected $SubscribeSM;
	/**
	 * @var boolean
	 */
	protected $SubscribeSMPro;

	/**
	 * @return int
	 */
	function getFeedbackScore()
	{
		return $this->FeedbackScore;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setFeedbackScore($value)
	{
		$this->FeedbackScore = $value;
	}
	/**
	 * @return dateTime
	 */
	function getRegistrationDate()
	{
		return $this->RegistrationDate;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setRegistrationDate($value)
	{
		$this->RegistrationDate = $value;
	}
	/**
	 * @return boolean
	 */
	function getSubscribeSA()
	{
		return $this->SubscribeSA;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setSubscribeSA($value)
	{
		$this->SubscribeSA = $value;
	}
	/**
	 * @return boolean
	 */
	function getSubscribeSAPro()
	{
		return $this->SubscribeSAPro;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setSubscribeSAPro($value)
	{
		$this->SubscribeSAPro = $value;
	}
	/**
	 * @return boolean
	 */
	function getSubscribeSM()
	{
		return $this->SubscribeSM;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setSubscribeSM($value)
	{
		$this->SubscribeSM = $value;
	}
	/**
	 * @return boolean
	 */
	function getSubscribeSMPro()
	{
		return $this->SubscribeSMPro;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setSubscribeSMPro($value)
	{
		$this->SubscribeSMPro = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ValidateTestUserRegistrationRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'FeedbackScore' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RegistrationDate' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SubscribeSA' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SubscribeSAPro' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SubscribeSM' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SubscribeSMPro' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
