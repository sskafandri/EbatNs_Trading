<?php
// autogenerated file 15.11.2010 08:34
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'CharityIDType.php';

/**
 * Lists the nonprofit charity organization affiliations for a specified user. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CharityAffiliationsType.html
 *
 */
class CharityAffiliationsType extends EbatNs_ComplexType
{
	/**
	 * @var CharityIDType
	 */
	protected $CharityID;

	/**
	 * @return CharityIDType
	 * @param integer $index 
	 */
	function getCharityID($index = null)
	{
		if ($index !== null) {
			return $this->CharityID[$index];
		} else {
			return $this->CharityID;
		}
	}
	/**
	 * @return void
	 * @param CharityIDType $value 
	 * @param  $index 
	 */
	function setCharityID($value, $index = null)
	{
		if ($index !== null) {
			$this->CharityID[$index] = $value;
		} else {
			$this->CharityID = $value;
		}
	}
	/**
	 * @return void
	 * @param CharityIDType $value 
	 */
	function addCharityID($value)
	{
		$this->CharityID[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CharityAffiliationsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CharityID' =>
					array(
						'required' => false,
						'type' => 'CharityIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
