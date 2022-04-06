<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of loadMyDBLib
 *
 * @author batista
 */
class loadMyDBLib {

    function __construct() {
       // require_once(APPPATH . 'third_party/getID3/getid3/getid3.php');
        require_once(APPPATH.'libraries/MModel.php');
        require_once(APPPATH.'libraries/MDatabase.php');
    }

}
