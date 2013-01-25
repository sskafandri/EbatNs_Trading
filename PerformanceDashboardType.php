<?php
// autogenerated file 22.07.2011 08:57
// $Id: $
// $Log: $
//
//
require_once 'PerformanceStatusCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'SiteCodeType.php';
require_once 'SellerDashboardAlertType.php';

/**
 * The performance status of the seller for each of the participating regions.The 
 * seller performance status is also listed on the associated Seller DashBoard. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PerformanceDashboardType.html
 *
 */
class PerformanceDashboardType extends EbatNs_ComplexType
{
	/**
	 * @var SiteCodeType
	 */
	protected $Site;
	/**
	 * @var PerformanceStatusCodeType
	 */
	protected $Status;
	/**
	 * @var SellerDashboardAlertType
	 */
	protected $Alert;

	/**
	 * @return SiteCodeType
	 * @param integer $index 
	 */
	function getSite($index = null)
	{
		if ($index !== null) {
			return $this->Site[$index];
		} else {
			return $this->Site;
		}
	}
	/**
	 * @return void
	 * @param SiteCodeType $value 
	 * @param  $index 
	 */
	function setSite($value, $index = null)
	{
		if ($index !== null) {
			$this->Site[$index] = $value;
		} else {
			$this->Site = $value;
		}
	}
	/**
	 * @return void
	 * @param SiteCodeType $value 
	 */
	function addSite($value)
	{
		$this->Site[] = $value;
	}
	/**
	 * @return PerformanceStatusCodeType
	 */
	function getStatus()
	{
		return $this->Status;
	}
	/**
	 * @return void
	 * @param PerformanceStatusCodeType $value 
	 */
	function setStatus($value)
	{
		$this->Status = $value;
	}
	/**
	 * @return SellerDashboardAlertType
	 */
	function getAlert()
	{
		return $this->Alert;
	}
	/**
	 * @return void
	 * @param SellerDashboardAlertType $value 
	 */
	function setAlert($value)
	{
		$this->Alert = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PerformanceDashboardType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Site' =>
					array(
						'required' => false,
						'type' => 'SiteCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'Status' =>
					array(
						'required' => false,
						'type' => 'PerformanceStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Alert' =>
					array(
						'required' => false,
						'type' => 'SellerDashboardAlertType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
