<?php
// autogenerated file 22.07.2011 09:24
// $Id: $
// $Log: $
//
//
require_once 'CharitySellerStatusCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'CharityAffiliationType.php';

/**
 * Contains information about one seller with a eBay Giving Works providercharity 
 * seller account. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CharitySellerType.html
 *
 */
class CharitySellerType extends EbatNs_ComplexType
{
	/**
	 * @var CharitySellerStatusCodeType
	 */
	protected $CharitySellerStatus;
	/**
	 * @var CharityAffiliationType
	 */
	protected $CharityAffiliation;
	/**
	 * @var boolean
	 */
	protected $TermsAndConditionsAccepted;

	/**
	 * @return CharitySellerStatusCodeType
	 */
	function getCharitySellerStatus()
	{
		return $this->CharitySellerStatus;
	}
	/**
	 * @return void
	 * @param CharitySellerStatusCodeType $value 
	 */
	function setCharitySellerStatus($value)
	{
		$this->CharitySellerStatus = $value;
	}
	/**
	 * @return CharityAffiliationType
	 * @param integer $index 
	 */
	function getCharityAffiliation($index = null)
	{
		if ($index !== null) {
			return $this->CharityAffiliation[$index];
		} else {
			return $this->CharityAffiliation;
		}
	}
	/**
	 * @return void
	 * @param CharityAffiliationType $value 
	 * @param  $index 
	 */
	function setCharityAffiliation($value, $index = null)
	{
		if ($index !== null) {
			$this->CharityAffiliation[$index] = $value;
		} else {
			$this->CharityAffiliation = $value;
		}
	}
	/**
	 * @return void
	 * @param CharityAffiliationType $value 
	 */
	function addCharityAffiliation($value)
	{
		$this->CharityAffiliation[] = $value;
	}
	/**
	 * @return boolean
	 */
	function getTermsAndConditionsAccepted()
	{
		return $this->TermsAndConditionsAccepted;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setTermsAndConditionsAccepted($value)
	{
		$this->TermsAndConditionsAccepted = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CharitySellerType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CharitySellerStatus' =>
					array(
						'required' => false,
						'type' => 'CharitySellerStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CharityAffiliation' =>
					array(
						'required' => false,
						'type' => 'CharityAffiliationType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'TermsAndConditionsAccepted' =>
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
