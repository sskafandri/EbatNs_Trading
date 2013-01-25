<?php
// autogenerated file 15.11.2010 08:34
// $Id: $
// $Log: $
//
//
require_once 'MessageTypeCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'QuestionTypeCodeType.php';

/**
 * Container for individual message information. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MemberMessageType.html
 *
 */
class MemberMessageType extends EbatNs_ComplexType
{
	/**
	 * @var MessageTypeCodeType
	 */
	protected $MessageType;
	/**
	 * @var QuestionTypeCodeType
	 */
	protected $QuestionType;
	/**
	 * @var boolean
	 */
	protected $EmailCopyToSender;
	/**
	 * @var boolean
	 */
	protected $HideSendersEmailAddress;
	/**
	 * @var boolean
	 */
	protected $DisplayToPublic;
	/**
	 * @var string
	 */
	protected $SenderID;
	/**
	 * @var string
	 */
	protected $SenderEmail;
	/**
	 * @var string
	 */
	protected $RecipientID;
	/**
	 * @var string
	 */
	protected $Subject;
	/**
	 * @var string
	 */
	protected $Body;
	/**
	 * @var string
	 */
	protected $MessageID;
	/**
	 * @var string
	 */
	protected $ParentMessageID;

	/**
	 * @return MessageTypeCodeType
	 */
	function getMessageType()
	{
		return $this->MessageType;
	}
	/**
	 * @return void
	 * @param MessageTypeCodeType $value 
	 */
	function setMessageType($value)
	{
		$this->MessageType = $value;
	}
	/**
	 * @return QuestionTypeCodeType
	 */
	function getQuestionType()
	{
		return $this->QuestionType;
	}
	/**
	 * @return void
	 * @param QuestionTypeCodeType $value 
	 */
	function setQuestionType($value)
	{
		$this->QuestionType = $value;
	}
	/**
	 * @return boolean
	 */
	function getEmailCopyToSender()
	{
		return $this->EmailCopyToSender;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setEmailCopyToSender($value)
	{
		$this->EmailCopyToSender = $value;
	}
	/**
	 * @return boolean
	 */
	function getHideSendersEmailAddress()
	{
		return $this->HideSendersEmailAddress;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setHideSendersEmailAddress($value)
	{
		$this->HideSendersEmailAddress = $value;
	}
	/**
	 * @return boolean
	 */
	function getDisplayToPublic()
	{
		return $this->DisplayToPublic;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDisplayToPublic($value)
	{
		$this->DisplayToPublic = $value;
	}
	/**
	 * @return string
	 */
	function getSenderID()
	{
		return $this->SenderID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSenderID($value)
	{
		$this->SenderID = $value;
	}
	/**
	 * @return string
	 */
	function getSenderEmail()
	{
		return $this->SenderEmail;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSenderEmail($value)
	{
		$this->SenderEmail = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getRecipientID($index = null)
	{
		if ($index !== null) {
			return $this->RecipientID[$index];
		} else {
			return $this->RecipientID;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setRecipientID($value, $index = null)
	{
		if ($index !== null) {
			$this->RecipientID[$index] = $value;
		} else {
			$this->RecipientID = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addRecipientID($value)
	{
		$this->RecipientID[] = $value;
	}
	/**
	 * @return string
	 */
	function getSubject()
	{
		return $this->Subject;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSubject($value)
	{
		$this->Subject = $value;
	}
	/**
	 * @return string
	 */
	function getBody()
	{
		return $this->Body;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setBody($value)
	{
		$this->Body = $value;
	}
	/**
	 * @return string
	 */
	function getMessageID()
	{
		return $this->MessageID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMessageID($value)
	{
		$this->MessageID = $value;
	}
	/**
	 * @return string
	 */
	function getParentMessageID()
	{
		return $this->ParentMessageID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setParentMessageID($value)
	{
		$this->ParentMessageID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MemberMessageType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'MessageType' =>
					array(
						'required' => false,
						'type' => 'MessageTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QuestionType' =>
					array(
						'required' => false,
						'type' => 'QuestionTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EmailCopyToSender' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'HideSendersEmailAddress' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DisplayToPublic' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SenderID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SenderEmail' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RecipientID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'Subject' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Body' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MessageID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ParentMessageID' =>
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
