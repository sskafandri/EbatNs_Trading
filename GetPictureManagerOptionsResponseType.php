<?php
// autogenerated file 15.11.2010 08:34
// $Id: $
// $Log: $
//
//
require_once 'PictureManagerSubscriptionType.php';
require_once 'PictureManagerPictureDisplayType.php';
require_once 'AbstractResponseType.php';

/**
 * Returns a list of Picture Manager options and allowed values. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetPictureManagerOptionsResponseType.html
 *
 */
class GetPictureManagerOptionsResponseType extends AbstractResponseType
{
	/**
	 * @var PictureManagerSubscriptionType
	 */
	protected $Subscription;
	/**
	 * @var PictureManagerPictureDisplayType
	 */
	protected $PictureType;

	/**
	 * @return PictureManagerSubscriptionType
	 * @param integer $index 
	 */
	function getSubscription($index = null)
	{
		if ($index !== null) {
			return $this->Subscription[$index];
		} else {
			return $this->Subscription;
		}
	}
	/**
	 * @return void
	 * @param PictureManagerSubscriptionType $value 
	 * @param  $index 
	 */
	function setSubscription($value, $index = null)
	{
		if ($index !== null) {
			$this->Subscription[$index] = $value;
		} else {
			$this->Subscription = $value;
		}
	}
	/**
	 * @return void
	 * @param PictureManagerSubscriptionType $value 
	 */
	function addSubscription($value)
	{
		$this->Subscription[] = $value;
	}
	/**
	 * @return PictureManagerPictureDisplayType
	 * @param integer $index 
	 */
	function getPictureType($index = null)
	{
		if ($index !== null) {
			return $this->PictureType[$index];
		} else {
			return $this->PictureType;
		}
	}
	/**
	 * @return void
	 * @param PictureManagerPictureDisplayType $value 
	 * @param  $index 
	 */
	function setPictureType($value, $index = null)
	{
		if ($index !== null) {
			$this->PictureType[$index] = $value;
		} else {
			$this->PictureType = $value;
		}
	}
	/**
	 * @return void
	 * @param PictureManagerPictureDisplayType $value 
	 */
	function addPictureType($value)
	{
		$this->PictureType[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetPictureManagerOptionsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Subscription' =>
					array(
						'required' => false,
						'type' => 'PictureManagerSubscriptionType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'PictureType' =>
					array(
						'required' => false,
						'type' => 'PictureManagerPictureDisplayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
