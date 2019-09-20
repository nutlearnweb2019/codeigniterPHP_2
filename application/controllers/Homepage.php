<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function index()
	{
                $this->load->view('CSS_view');
                $this->load->view('Banner_view');
                $this->load->view('Navbar_view');
                $this->load->view('Homepage_view');
                $this->load->view('Footer_view');
                $this->load->view('JS_view');
	}

}