<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetPictureManagerOptionsRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetPictureManagerOptions
 * 
 * Sample call for GetPictureManagerOptions
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetPictureManagerOptions.php,v 1.104 2012-09-10 10:46:36 michaelcoslar Exp $
 * @access public 
 */
class sample_GetPictureManagerOptions extends EbatNs_Environment
{

   /**
     * sample_GetPictureManagerOptions::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new GetPictureManagerOptionsRequestType();
        
        $res = $this->proxy->GetPictureManagerOptions($req);
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

$x = new sample_GetPictureManagerOptions();
$x->dispatchCall(array());

?>