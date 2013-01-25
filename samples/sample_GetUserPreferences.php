<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetUserPreferencesRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetUserPreferences
 * 
 * Sample call for GetUserPreferences
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetUserPreferences.php,v 1.93 2012-05-09 11:02:29 michaelcoslar Exp $
 * @access public
 */
class sample_GetUserPreferences extends EbatNs_Environment
{

   /**
     * sample_GetUserPreferences::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($params)
    {
        $req = new GetUserPreferencesRequestType();
		
        $res = $this->proxy->GetUserPreferences($req);
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

$x = new sample_GetUserPreferences();
$x->dispatchCall(array());
?>