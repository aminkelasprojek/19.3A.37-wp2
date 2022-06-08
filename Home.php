<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    private $folder   = "home/";
    private $template = "template-admin/";
    private $menu     = "Home";

    public function __construct()
    {
        parent::__construct();


        //CekLogin
        CekUser();
    }



    public function index()
    {
        $data = array(
            "menu" => $this->menu,
            "submenu" => 'read'

        );

        $this->load->view($this->template . 'head', $data);
        $this->load->view($this->template . 'sidebar', $data);
        $this->load->view($this->template . 'header', $data);


        $this->load->view($this->folder . 'read', $data);

        $this->load->view($this->template . 'footer', $data);


        $this->load->view('template2/header', $data);
        $this->load->view('template2/menu', $data);

        $this->load->view('home/read', $data);
        $this->load->view('template2/footer', $data);
    }
}

/* End of file Home.php */