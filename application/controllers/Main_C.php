<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_C extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Main_M','main_m');
	}

	public function index()
	{
		$this->load->view('signin');
	}

	public function dashboard()
	{
		$this->load->view('header');
		$this->load->view('dashboard');
		$this->load->view('footer');
	}
	public function previous_readings()
	{
		$data["dataview"] = $this->main_m->read_log();

		$this->load->view('header');
		$this->load->view('previous_readings', $data);
		$this->load->view('footer');
	}
	public function aboutus()
	{
		$this->load->view('header');
		$this->load->view('aboutus');
		$this->load->view('footer');
	}

}
?>