<?php
// autogenerated file 09.05.2012 13:00
// $Id: $
// $Log: $
//
//
require_once 'CharityStatusCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'NonProfitSocialAddressType.php';
require_once 'NonProfitAddressType.php';

/**
 * Type defining the <b>Charity</b> container, which consists of all detailsrelated 
 * to a nonprofit charity organization. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CharityInfoType.html
 *
 */
class CharityInfoType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $Name;
	/**
	 * @var string
	 */
	protected $Mission;
	/**
	 * @var anyURI
	 */
	protected $LogoURL;
	/**
	 * @var CharityStatusCodeType
	 */
	protected $Status;
	/**
	 * @var string
	 */
	protected $SearchableString;
	/**
	 * @var int
	 */
	protected $CharityRegion;
	/**
	 * @var int
	 */
	protected $CharityDomain;
	/**
	 * @var string
	 */
	protected $CharityID;
	/**
	 * @var anyURI
	 */
	protected $LogoURLSelling;
	/**
	 * @var boolean
	 */
	protected $DisplayLogoSelling;
	/**
	 * @var boolean
	 */
	protected $DisplayNameInCheckout;
	/**
	 * @var string
	 */
	protected $Description;
	/**
	 * @var boolean
	 */
	protected $ShowMultipleDonationAmountInCheckout;
	/**
	 * @var int
	 */
	protected $PopularityIndex;
	/**
	 * @var string
	 */
	protected $EIN;
	/**
	 * @var string
	 */
	protected $NonProfitSecondName;
	/**
	 * @var NonProfitAddressType
	 */
	protected $NonProfitAddress;
	/**
	 * @var NonProfitSocialAddressType
	 */
	protected $NonProfitSocialAddress;

	/**
	 * @return string
	 */
	function getName()
	{
		return $this->Name;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setName($value)
	{
		$this->Name = $value;
	}
	/**
	 * @return string
	 */
	function getMission()
	{
		return $this->Mission;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMission($value)
	{
		$this->Mission = $value;
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
	 * @return CharityStatusCodeType
	 */
	function getStatus()
	{
		return $this->Status;
	}
	/**
	 * @return void
	 * @param CharityStatusCodeType $value 
	 */
	function setStatus($value)
	{
		$this->Status = $value;
	}
	/**
	 * @return string
	 */
	function getSearchableString()
	{
		return $this->SearchableString;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSearchableString($value)
	{
		$this->SearchableString = $value;
	}
	/**
	 * @return int
	 */
	function getCharityRegion()
	{
		return $this->CharityRegion;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setCharityRegion($value)
	{
		$this->CharityRegion = $value;
	}
	/**
	 * @return int
	 * @param integer $index 
	 */
	function getCharityDomain($index = null)
	{
		if ($index !== null) {
			return $this->CharityDomain[$index];
		} else {
			return $this->CharityDomain;
		}
	}
	/**
	 * @return void
	 * @param int $value 
	 * @param  $index 
	 */
	function setCharityDomain($value, $index = null)
	{
		if ($index !== null) {
			$this->CharityDomain[$index] = $value;
		} else {
			$this->CharityDomain = $value;
		}
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function addCharityDomain($value)
	{
		$this->CharityDomain[] = $value;
	}
	/**
	 * @return string
	 */
	function getCharityID()
	{
		return $this->CharityID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCharityID($value)
	{
		$this->CharityID = $value;
	}
	/**
	 * @return anyURI
	 */
	function getLogoURLSelling()
	{
		return $this->LogoURLSelling;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setLogoURLSelling($value)
	{
		$this->LogoURLSelling = $value;
	}
	/**
	 * @return boolean
	 */
	function getDisplayLogoSelling()
	{
		return $this->DisplayLogoSelling;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDisplayLogoSelling($value)
	{
		$this->DisplayLogoSelling = $value;
	}
	/**
	 * @return boolean
	 */
	function getDisplayNameInCheckout()
	{
		return $this->DisplayNameInCheckout;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDisplayNameInCheckout($value)
	{
		$this->DisplayNameInCheckout = $value;
	}
	/**
	 * @return string
	 */
	function getDescription()
	{
		return $this->Description;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDescription($value)
	{
		$this->Description = $value;
	}
	/**
	 * @return boolean
	 */
	function getShowMultipleDonationAmountInCheckout()
	{
		return $this->ShowMultipleDonationAmountInCheckout;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setShowMultipleDonationAmountInCheckout($value)
	{
		$this->ShowMultipleDonationAmountInCheckout = $value;
	}
	/**
	 * @return int
	 */
	function getPopularityIndex()
	{
		return $this->PopularityIndex;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPopularityIndex($value)
	{
		$this->PopularityIndex = $value;
	}
	/**
	 * @return string
	 */
	function getEIN()
	{
		return $this->EIN;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setEIN($value)
	{
		$this->EIN = $value;
	}
	/**
	 * @return string
	 */
	function getNonProfitSecondName()
	{
		return $this->NonProfitSecondName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setNonProfitSecondName($value)
	{
		$this->NonProfitSecondName = $value;
	}
	/**
	 * @return NonProfitAddressType
	 * @param integer $index 
	 */
	function getNonProfitAddress($index = null)
	{
		if ($index !== null) {
			return $this->NonProfitAddress[$index];
		} else {
			return $this->NonProfitAddress;
		}
	}
	/**
	 * @return void
	 * @param NonProfitAddressType $value 
	 * @param  $index 
	 */
	function setNonProfitAddress($value, $index = null)
	{
		if ($index !== null) {
			$this->NonProfitAddress[$index] = $value;
		} else {
			$this->NonProfitAddress = $value;
		}
	}
	/**
	 * @return void
	 * @param NonProfitAddressType $value 
	 */
	function addNonProfitAddress($value)
	{
		$this->NonProfitAddress[] = $value;
	}
	/**
	 * @return NonProfitSocialAddressType
	 * @param integer $index 
	 */
	function getNonProfitSocialAddress($index = null)
	{
		if ($index !== null) {
			return $this->NonProfitSocialAddress[$index];
		} else {
			return $this->NonProfitSocialAddress;
		}
	}
	/**
	 * @return void
	 * @param NonProfitSocialAddressType $value 
	 * @param  $index 
	 */
	function setNonProfitSocialAddress($value, $index = null)
	{
		if ($index !== null) {
			$this->NonProfitSocialAddress[$index] = $value;
		} else {
			$this->NonProfitSocialAddress = $value;
		}
	}
	/**
	 * @return void
	 * @param NonProfitSocialAddressType $value 
	 */
	function addNonProfitSocialAddress($value)
	{
		$this->NonProfitSocialAddress[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CharityInfoType', 'http://www.w3.org/2001/XMLSchema');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Name' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Mission' =>
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
					'Status' =>
					array(
						'required' => false,
						'type' => 'CharityStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SearchableString' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CharityRegion' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CharityDomain' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..3'
					),
					'CharityID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'LogoURLSelling' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DisplayLogoSelling' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DisplayNameInCheckout' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Description' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShowMultipleDonationAmountInCheckout' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PopularityIndex' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EIN' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'NonProfitSecondName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'NonProfitAddress' =>
					array(
						'required' => false,
						'type' => 'NonProfitAddressType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'NonProfitSocialAddress' =>
					array(
						'required' => false,
						'type' => 'NonProfitSocialAddressType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));	$this->_attributes = array_merge($this->_attributes,
		array(
			'id' =>
			array(
				'name' => 'id',
				'type' => 'string',
				'use' => 'required'
			)
		));

	}
}
?>
