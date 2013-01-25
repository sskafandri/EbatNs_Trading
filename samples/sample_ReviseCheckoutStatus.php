<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'ReviseCheckoutStatusRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_ReviseCheckoutStatus
 * 
 * Sample call for ReviseCheckoutStatus
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_ReviseCheckoutStatus.php,v 1.89 2011-12-29 13:56:30 michaelcoslar Exp $
 * @access public
 */
class sample_ReviseCheckoutStatus extends EbatNs_Environment
{

   /**
     * sample_ReviseCheckoutStatus::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new ReviseCheckoutStatusRequestType();
        $req->setCheckoutStatus($params['CheckoutStatus']);
        $req->setItemID($params['ItemID']);
        $req->setTransactionID($params['TransactionID']);
        
        $res = $this->proxy->ReviseCheckoutStatus($req);
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

$x = new sample_ReviseCheckoutStatus();
$x->dispatchCall
(
	array
	(
		'CheckoutStatus' => 'Complete',
		'ItemID' => '110032357041',
		'TransactionID' => 'dummyTransactionID'
	)
);

?>