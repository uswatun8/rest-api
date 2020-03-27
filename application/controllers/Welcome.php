<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
    {
        // Construct the parent class
        parent::__construct();
	}
	public function index_get(){
		$this->load->view('crud/add');
	}
}
