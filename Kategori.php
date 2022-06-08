<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    private $folder   = "kategori/";
    private $template = "template2/";
    private $menu     = "kategori";


    public function __construct()
    {
        parent::__construct();

        //Model
        $this->load->model('M_kategori');

        //CekLogin
        CekUser();
    }


    public function index()
    {
        $q = $this->M_kategori->GetAll();
        $data = array(
            "menu" => $this->menu,
            "submenu" => 'read',
            "data" => $q

        );
        $this->load->view($this->template . '/header', $data);
        $this->load->view($this->template . '/menu', $data);

        $this->load->view($this->folder . '/read', $data);
        $this->load->view($this->template . '/footer', $data);
    }
    public function create()
    {

        $data = array(
            "menu" => $this->menu,
            "submenu" => 'create'

        );
        $this->load->view($this->template . '/header', $data);
        $this->load->view($this->template . '/menu', $data);

        $this->load->view($this->folder . '/create', $data);
        $this->load->view($this->template . '/footer', $data);
    }
    public function save()
    {
        $data = array(
            'id_kategori' => NULL,

            $this->folder . '' => $this->input->post($this->folder . '')
        );
        $this->M_kategori->insert($data);


        redirect($this->menu, 'refresh');
    }

    public function delete()
    {

        $id = $this->uri->segment(3);

        $this->M_kategori->delete($id);

        redirect($this->menu, 'refresh');
    }
    public function edit()
    {
        $id = $this->uri->segment(3);

        $data = array(
            "menu" => $this->menu,
            "submenu" => 'edit',
            "data" => $this->M_kategori->edit($id)

        );
        $this->load->view($this->template . '/header', $data);
        $this->load->view($this->template . '/menu', $data);

        $this->load->view($this->folder . '/read', $data);
        $this->load->view($this->template . '/footer', $data);
    }
    public function update()
    {
        $id = $this->uri->segment(3);

        $data = array(
            'kategori' => $this->input->post('kategori')
        );
        $this->M_kategori->update($id, $data);

        redirect($this->menu, 'refresh');
    }
}


/* End of file kategori.php */
