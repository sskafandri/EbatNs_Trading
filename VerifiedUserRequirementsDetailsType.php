<?php
// autogenerated file 10.09.2012 12:44
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * [Selling] A means of limiting unverified bidders. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/VerifiedUserRequirementsDetailsType.html
 *
 */
class VerifiedUserRequirementsDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var boolean
	 */
	protected $VerifiedUser;
	/**
	 * @var int
	 */
	protected $FeedbackScore;

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
	 * @param integer $index 
	 */
	function getFeedbackScore($index = null)
	{
		if ($index !== null) {
			return $this->FeedbackScore[$index];
		} else {
			return $this->FeedbackScore;
		}
	}
	/**
	 * @return void
	 * @param int $value 
	 * @param  $index 
	 */
	function setFeedbackScore($value, $index = null)
	{
		if ($index !== null) {
			$this->FeedbackScore[$index] = $value;
		} else {
			$this->FeedbackScore = $value;
		}
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function addFeedbackScore($value)
	{
		$this->FeedbackScore[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('VerifiedUserRequirementsDetailsType', 'urn:ebay:apis:eBLBaseComponents');
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
					'FeedbackScore' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
