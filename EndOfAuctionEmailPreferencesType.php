<?php
// autogenerated file 22.07.2011 09:24
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'EndOfAuctionLogoTypeCodeType.php';

/**
 * Contains the seller's preferences for the email sent to the buyer after the 
 * creation of the order line item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/EndOfAuctionEmailPreferencesType.html
 *
 */
class EndOfAuctionEmailPreferencesType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $TemplateText;
	/**
	 * @var anyURI
	 */
	protected $LogoURL;
	/**
	 * @var EndOfAuctionLogoTypeCodeType
	 */
	protected $LogoType;
	/**
	 * @var boolean
	 */
	protected $EmailCustomized;
	/**
	 * @var boolean
	 */
	protected $TextCustomized;
	/**
	 * @var boolean
	 */
	protected $LogoCustomized;
	/**
	 * @var boolean
	 */
	protected $CopyEmail;

	/**
	 * @return string
	 */
	function getTemplateText()
	{
		return $this->TemplateText;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTemplateText($value)
	{
		$this->TemplateText = $value;
	}
	/**
	 * @return anyURI
	 */
	function getLogoURL()
	{
		return $this->LogoURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setLogoURL($value)
	{
		$this->LogoURL = $value;
	}
	/**
	 * @return EndOfAuctionLogoTypeCodeType
	 */
	function getLogoType()
	{
		return $this->LogoType;
	}
	/**
	 * @return void
	 * @param EndOfAuctionLogoTypeCodeType $value 
	 */
	function setLogoType($value)
	{
		$this->LogoType = $value;
	}
	/**
	 * @return boolean
	 */
	function getEmailCustomized()
	{
		return $this->EmailCustomized;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setEmailCustomized($value)
	{
		$this->EmailCustomized = $value;
	}
	/**
	 * @return boolean
	 */
	function getTextCustomized()
	{
		return $this->TextCustomized;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setTextCustomized($value)
	{
		$this->TextCustomized = $value;
	}
	/**
	 * @return boolean
	 */
	function getLogoCustomized()
	{
		return $this->LogoCustomized;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setLogoCustomized($value)
	{
		$this->LogoCustomized = $value;
	}
	/**
	 * @return boolean
	 */
	function getCopyEmail()
	{
		return $this->CopyEmail;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setCopyEmail($value)
	{
		$this->CopyEmail = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('EndOfAuctionEmailPreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'TemplateText' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'LogoURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'LogoType' =>
					array(
						'required' => false,
						'type' => 'EndOfAuctionLogoTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EmailCustomized' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TextCustomized' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'LogoCustomized' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CopyEmail' =>
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
