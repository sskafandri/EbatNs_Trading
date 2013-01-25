<?php
// autogenerated file 10.09.2012 12:49
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Type defining the <b>VerifiedUserRequirements</b> container, which is used by 
 * the seller to block prospective buyers who do not pass a verified user check. 
 * Verified users are applicable to the Australia, France, India, Ireland, Spain, 
 * and UK sites. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/VerifiedUserRequirementsType.html
 *
 */
class VerifiedUserRequirementsType extends EbatNs_ComplexType
{
	/**
	 * @var boolean
	 */
	protected $VerifiedUser;
	/**
	 * @var int
	 */
	protected $MinimumFeedbackScore;

	/**
	 * @return boolean
	 */
	function getVerifiedUser()
	{
		return $this->VerifiedUser;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setVerifiedUser($value)
	{
		$this->VerifiedUser = $value;
	}
	/**
	 * @return int
	 */
	function getMinimumFeedbackScore()
	{
		return $this->MinimumFeedbackScore;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMinimumFeedbackScore($value)
	{
		$this->MinimumFeedbackScore = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('VerifiedUserRequirementsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'VerifiedUser' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MinimumFeedbackScore' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
