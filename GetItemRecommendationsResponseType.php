<?php
// autogenerated file 29.12.2011 14:42
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'GetRecommendationsResponseContainerType.php';

/**
 * GetItemRecommendations returns recommended changes or opportunities for 
 * improvementrelated to listing data that was passed in the request.This call 
 * supports batch requests. That is, it can retrieve recommendations for 
 * multipleitems at once. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetItemRecommendationsResponseType.html
 *
 */
class GetItemRecommendationsResponseType extends AbstractResponseType
{
	/**
	 * @var GetRecommendationsResponseContainerType
	 */
	protected $GetRecommendationsResponseContainer;

	/**
	 * @return GetRecommendationsResponseContainerType
	 * @param integer $index 
	 */
	function getGetRecommendationsResponseContainer($index = null)
	{
		if ($index !== null) {
			return $this->GetRecommendationsResponseContainer[$index];
		} else {
			return $this->GetRecommendationsResponseContainer;
		}
	}
	/**
	 * @return void
	 * @param GetRecommendationsResponseContainerType $value 
	 * @param  $index 
	 */
	function setGetRecommendationsResponseContainer($value, $index = null)
	{
		if ($index !== null) {
			$this->GetRecommendationsResponseContainer[$index] = $value;
		} else {
			$this->GetRecommendationsResponseContainer = $value;
		}
	}
	/**
	 * @return void
	 * @param GetRecommendationsResponseContainerType $value 
	 */
	function addGetRecommendationsResponseContainer($value)
	{
		$this->GetRecommendationsResponseContainer[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetItemRecommendationsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'GetRecommendationsResponseContainer' =>
					array(
						'required' => false,
						'type' => 'GetRecommendationsResponseContainerType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
