<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once(FUEL_PATH . 'models/base_module_model.php');

class portal_banner_model extends Base_module_model
{
    function __construct()
    {
        parent::__construct('portal_banner');
    }
}

class portal_banner_record extends Base_module_record {

}