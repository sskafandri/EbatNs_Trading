<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'AddTransactionConfirmationItemRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_AddTransactionConfirmationItem
 * 
 * Sample call for AddTransactionConfirmationItem
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_AddTransactionConfirmationItem.php,v 1.91 2012-05-09 10:50:32 michaelcoslar Exp $
 * @access public 
 */
class sample_AddTransactionConfirmationItem extends EbatNs_Environment
{

   /**
     * sample_AddTransactionConfirmationItem::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new AddTransactionConfirmationItemRequestType();
        $req->setItemID($params['ItemID']);

        $req->setListingDuration($params['ListingDuration']);
        $req->setNegotiatedPrice($params['NegotiatedPrice']);
		
        $res = $this->proxy->AddSecondChanceItem($req);
        if ($this->testValid($res))
        {
            $this->dumpObject($res);
            return (true);
        }
        else 
        {
            return (false);
        }
    }
}

$x = new sample_AddSecondChanceItem();
$x->dispatchCall
(
	array
	(
		'Duration' => 'Days_7', 
		'ItemID' => 'ItemIdDummy', 
		'RecipientBidderUserID' => 'UserIdDummy'
	)
);

?>