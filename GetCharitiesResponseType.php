<?php
// autogenerated file 09.05.2012 13:00
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'CharityInfoType.php';

/**
 * Contains information about charity nonprofit organizations that meet thecriteria 
 * specified in the request. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetCharitiesResponseType.html
 *
 */
class GetCharitiesResponseType extends AbstractResponseType
{
	/**
	 * @var CharityInfoType
	 */
	protected $Charity;

	/**
	 * @return CharityInfoType
	 * @param integer $index 
	 */
	function getCharity($index = null)
	{
		if ($index !== null) {
			return $this->Charity[$index];
		} else {
			return $this->Charity;
		}
	}
	/**
	 * @return void
	 * @param CharityInfoType $value 
	 * @param  $index 
	 */
	function setCharity($value, $index = null)
	{
		if ($index !== null) {
			$this->Charity[$index] = $value;
		} else {
			$this->Charity = $value;
		}
	}
	/**
	 * @return void
	 * @param CharityInfoType $value 
	 */
	function addCharity($value)
	{
		$this->Charity[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetCharitiesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Charity' =>
					array(
						'required' => false,
						'type' => 'CharityInfoType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
