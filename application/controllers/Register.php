<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
        $this->load->view('CSS_view');
        $this->load->view('Register_view');
        $this->load->view('JS_view');
    }
    
    public function adding()
	{
        echo '<pre>';
            print_r($_POST);
        echo '</pre>';
    }

    public function login()
	{
        $this->load->view('CSS_view');
        $this->load->view('Login_view');
        $this->load->view('JS_view');   
    }

    public function show_login()
    {
        echo '<pre>';
            print_r($_POST);
        echo '</pre>';
    }
}