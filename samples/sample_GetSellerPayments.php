<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetSellerPaymentsRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetSellerPayments
 * 
 * Sample call for GetSellerPayments
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetSellerPayments.php,v 1.64 2010-11-15 07:30:31 michael Exp $
 * @access public
 */
class sample_GetSellerPayments extends EbatNs_Environment
{

   /**
     * sample_GetSellerPayments::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new GetSellerPaymentsRequestType();
        $req->setPaymentStatus($params['PaymentStatus']);
        $req->setPaymentTimeFrom($params['PaymentTimeFrom']);
        $req->setPaymentTimeTo($params['PaymentTimeTo']);
        
        $res = $this->proxy->GetSellerPayments($req);
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

$x = new sample_GetSellerPayments();
$x->dispatchCall
(
	array
	(
		'PaymentStatus' => 'Pending',
		'PaymentTimeFrom' => '2008-06-19 15:00:00',
		'PaymentTimeTo' => '2008-06-26 15:00:00'
	)
);

?>