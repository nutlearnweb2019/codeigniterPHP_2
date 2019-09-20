<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_data extends CI_Controller {

    public function __construct()
        {
            parent::__construct();
            $this->load->model('Member_model');
        }
    
    public function index()
	    {

            $data['query']=$this->Member_model->show_member_select_orderBY();

            // echo '<pre>';
            // print_r($data);
            // echo '</pre>';
            
            // exit;

            $this->load->view('CSS_view');
            $this->load->view('Banner_view');
            $this->load->view('Navbar_view');
            $this->load->view('Insert_data_view');
            $this->load->view('Show_member_view' ,$data);
            $this->load->view('Footer_view');
            $this->load->view('JS_view');
        }

        public function edit_data($mem_id)
	    {

            $data['query']=$this->Member_model->read_for_edit($mem_id);

            $this->load->view('CSS_view');
            $this->load->view('Banner_view');
            $this->load->view('Navbar_view');
            $this->load->view('Edit_data_view' ,$data);            
            $this->load->view('Footer_view');
            $this->load->view('JS_view');
        }
    
    public function adding()
	    {
            // echo '<pre>';
            //     print_r($_POST);
            // echo '</pre>';

            // exit;
            
            $this->Member_model->insert_Member();
            redirect('', 'refresh');
    
        }

    public function save_edit_data()
	    {
            //print_r($_POST);

            $this->Member_model->update_Member();
            redirect('', 'refresh');
        }

    public function delete_data($mem_id)
	    {
            //print_r($_POST);

            $this->Member_model->delete_Member($mem_id);
        }

}