<?php
// autogenerated file 15.11.2010 08:34
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Suggested spelling of mispelled search terms, along with the number of matching 
 * items that would have been returned if the suggestions had been used. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SpellingSuggestionType.html
 *
 */
class SpellingSuggestionType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $MatchingItemCount;
	/**
	 * @var string
	 */
	protected $Text;

	/**
	 * @return int
	 */
	function getMatchingItemCount()
	{
		return $this->MatchingItemCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMatchingItemCount($value)
	{
		$this->MatchingItemCount = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getText($index = null)
	{
		if ($index !== null) {
			return $this->Text[$index];
		} else {
			return $this->Text;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setText($value, $index = null)
	{
		if ($index !== null) {
			$this->Text[$index] = $value;
		} else {
			$this->Text = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addText($value)
	{
		$this->Text[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SpellingSuggestionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'MatchingItemCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Text' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
