<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('form_validation');
    }
    

    public function index()
    {
        $this->load->view('matakuliah/form');
    }
    public function cetak(){
        $this->form_validation->set_rules('kode','kode','required');


        if($this->form_validation->run() == false){
            $this->load->view('matakuliah/form');

        }else{
            $data = array(
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            );

            $this->load->view('matakuliah/cetak', $data);
        }
        
        
       
           
    } 


}

/* End of file Matakuliah.php */
