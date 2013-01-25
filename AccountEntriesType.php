<?php
// autogenerated file 29.12.2011 14:42
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'AccountEntryType.php';

/**
 * Collection of zero, one, or multiple individual detail account entries. 
 * Containsone AccountEntry object for each account entry returned. See the 
 * schemadocumentation for AccountEntryType for details on its properties. You can 
 * uniquely identifythe entries that the GetAccount call returns within the 
 * AccountEntries tag.Specifically, the following fields, returned within the 
 * AccountEntries tag,can be used in combination as a unique key: 
 * AccountEntry.Date, AccountEntry.AccountDetailsEntryType,AccountEntry.ItemID, and 
 * AccountEntry.RefNumber. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AccountEntriesType.html
 *
 */
class AccountEntriesType extends EbatNs_ComplexType
{
	/**
	 * @var AccountEntryType
	 */
	protected $AccountEntry;

	/**
	 * @return AccountEntryType
	 * @param integer $index 
	 */
	function getAccountEntry($index = null)
	{
		if ($index !== null) {
			return $this->AccountEntry[$index];
		} else {
			return $this->AccountEntry;
		}
	}
	/**
	 * @return void
	 * @param AccountEntryType $value 
	 * @param  $index 
	 */
	function setAccountEntry($value, $index = null)
	{
		if ($index !== null) {
			$this->AccountEntry[$index] = $value;
		} else {
			$this->AccountEntry = $value;
		}
	}
	/**
	 * @return void
	 * @param AccountEntryType $value 
	 */
	function addAccountEntry($value)
	{
		$this->AccountEntry[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AccountEntriesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'AccountEntry' =>
					array(
						'required' => false,
						'type' => 'AccountEntryType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
