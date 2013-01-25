<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'AddOrderRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_AddOrder
 * 
 * Sample call for AddOrder
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_AddOrder.php,v 1.78 2011-07-22 07:19:25 michael Exp $
 * @access public 
 */
class sample_AddOrder extends EbatNs_Environment
{

   /**
     * sample_AddOrder::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new AddOrderRequestType();
        $req->setOrder($params['Order']);
		
        $res = $this->proxy->AddOrder($req);
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

$x = new sample_AddOrder();
$x->dispatchCall
(
	array
	(
		'Order' => 'Total'
	)
);

?>