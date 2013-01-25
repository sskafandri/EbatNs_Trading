<?php
// autogenerated file 10.09.2012 12:49
// $Id: $
// $Log: $
//
//
require_once 'MyMessagesFolderOperationCodeType.php';
require_once 'AbstractRequestType.php';

/**
 * Renames, removes, or restores the specified My Messages folders fora given user. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ReviseMyMessagesFoldersRequestType.html
 *
 */
class ReviseMyMessagesFoldersRequestType extends AbstractRequestType
{
	/**
	 * @var MyMessagesFolderOperationCodeType
	 */
	protected $Operation;
	/**
	 * @var long
	 */
	protected $FolderID;
	/**
	 * @var string
	 */
	protected $FolderName;

	/**
	 * @return MyMessagesFolderOperationCodeType
	 */
	function getOperation()
	{
		return $this->Operation;
	}
	/**
	 * @return void
	 * @param MyMessagesFolderOperationCodeType $value 
	 */
	function setOperation($value)
	{
		$this->Operation = $value;
	}
	/**
	 * @return long
	 * @param integer $index 
	 */
	function getFolderID($index = null)
	{
		if ($index !== null) {
			return $this->FolderID[$index];
		} else {
			return $this->FolderID;
		}
	}
	/**
	 * @return void
	 * @param long $value 
	 * @param  $index 
	 */
	function setFolderID($value, $index = null)
	{
		if ($index !== null) {
			$this->FolderID[$index] = $value;
		} else {
			$this->FolderID = $value;
		}
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function addFolderID($value)
	{
		$this->FolderID[] = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getFolderName($index = null)
	{
		if ($index !== null) {
			return $this->FolderName[$index];
		} else {
			return $this->FolderName;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setFolderName($value, $index = null)
	{
		if ($index !== null) {
			$this->FolderName[$index] = $value;
		} else {
			$this->FolderName = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addFolderName($value)
	{
		$this->FolderName[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ReviseMyMessagesFoldersRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Operation' =>
					array(
						'required' => false,
						'type' => 'MyMessagesFolderOperationCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FolderID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'FolderName' =>
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
