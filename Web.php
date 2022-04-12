<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
    function __construct(){
        parent::__construct();
    }
    public function index(){

        $data = array(
            'judul' => "Halaman Depan"
        );
        $this->load->view('template/header',$data);
        $this->load->view('web/index',$data);
        $this->load->view('template/footer',$data);
        
    }
    public function about(){

        $data = array(
            'judul' => "Halaman About"
        );
        $this->load->view('template/header',$data);
        $this->load->view('web/about',$data);
        $this->load->view('template/footer',$data);

    }

}

/* End of file Web.php */
