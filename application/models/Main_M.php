<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_M extends CI_Model {
	function __construct()
	{
	    parent::__construct();
	}

	public function read_log()
	{
		$data = $this->db->query("SELECT * FROM tblreadings");
		return $data->result_object();
	}

	

}