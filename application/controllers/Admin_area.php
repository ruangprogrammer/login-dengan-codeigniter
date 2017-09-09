<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_area extends Admin_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('access');
    }

    public function index(){
        echo "Welcome Admin Area<br>";
        echo "<a href='".base_url()."admin/logout'>logout</a>";
    }
}
