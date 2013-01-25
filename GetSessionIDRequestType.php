<?php
// autogenerated file 09.05.2012 12:52
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves a session ID that identifies a user and your application when you make 
 * aFetchToken request. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetSessionIDRequestType.html
 *
 */
class GetSessionIDRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $RuName;

	/**
	 * @return string
	 */
	function getRuName()
	{
		return $this->RuName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setRuName($value)
	{
		$this->RuName = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetSessionIDRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'RuName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
