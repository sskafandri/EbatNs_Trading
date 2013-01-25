<?php
// autogenerated file 29.12.2011 14:18
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Contains one or more stored comments for use as feedback to buyers. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FeedbackCommentArrayType.html
 *
 */
class FeedbackCommentArrayType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $StoredCommentText;

	/**
	 * @return string
	 * @param integer $index 
	 */
	function getStoredCommentText($index = null)
	{
		if ($index !== null) {
			return $this->StoredCommentText[$index];
		} else {
			return $this->StoredCommentText;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setStoredCommentText($value, $index = null)
	{
		if ($index !== null) {
			$this->StoredCommentText[$index] = $value;
		} else {
			$this->StoredCommentText = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addStoredCommentText($value)
	{
		$this->StoredCommentText[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FeedbackCommentArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'StoredCommentText' =>
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
