<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prev_C extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Prev_M','prev_m');
	}


}