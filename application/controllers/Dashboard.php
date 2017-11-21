<?php

class dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
		//if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		//{
		//	redirect('/');
		//}
        $data['level']=$this->session->userdata('level');
        $this->load->view('dashboard',$data);
        
    } 
}