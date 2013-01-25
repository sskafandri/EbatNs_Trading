<?php
// autogenerated file 22.07.2011 09:17
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Container of token and user reply. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BotBlockRequestType.html
 *
 */
class BotBlockRequestType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $BotBlockToken;
	/**
	 * @var string
	 */
	protected $BotBlockUserInput;

	/**
	 * @return string
	 */
	function getBotBlockToken()
	{
		return $this->BotBlockToken;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setBotBlockToken($value)
	{
		$this->BotBlockToken = $value;
	}
	/**
	 * @return string
	 */
	function getBotBlockUserInput()
	{
		return $this->BotBlockUserInput;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setBotBlockUserInput($value)
	{
		$this->BotBlockUserInput = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BotBlockRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'BotBlockToken' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BotBlockUserInput' =>
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
