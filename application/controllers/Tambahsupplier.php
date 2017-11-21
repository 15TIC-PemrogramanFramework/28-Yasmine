<?php 

/**
* 
*/
class tambahsupplier extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('model');
    }

    function index(){
        $data=array(
            'action' => site_url('tambahsupplier/tambahsupplieraksi'),
            'kode_supplier' => set_value('kode_supplier'),
            'nama_supplier' => set_value('nama_supplier'),
            'alamat' => set_value('alamat'),
            'no_telp' => set_value('no_telp')
            
        );
        $this->load->view('supplier/tambahsupplier',$data);
    }

    function tambahsupplieraksi(){
        $data=array(
            'kode_supplier' => $this->input->post('kode_supplier'),
            'nama_supplier' => $this->input->post('nama_supplier'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp')
        );
        $this->model->tambahsupplier($data);
        redirect(site_url('supplier'));

    }
}
?>