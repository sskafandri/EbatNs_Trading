<?php
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Container of token and image URL and Audio URL. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BotBlockResponseType.html
 *
 */
class BotBlockResponseType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $BotBlockToken;
	/**
	 * @var string
	 */
	protected $BotBlockUrl;
	/**
	 * @var string
	 */
	protected $BotBlockAudioUrl;

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
	function getBotBlockUrl()
	{
		return $this->BotBlockUrl;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setBotBlockUrl($value)
	{
		$this->BotBlockUrl = $value;
	}
	/**
	 * @return string
	 */
	function getBotBlockAudioUrl()
	{
		return $this->BotBlockAudioUrl;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setBotBlockAudioUrl($value)
	{
		$this->BotBlockAudioUrl = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BotBlockResponseType', 'urn:ebay:apis:eBLBaseComponents');
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
					'BotBlockUrl' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BotBlockAudioUrl' =>
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
