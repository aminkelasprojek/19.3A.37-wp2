<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Role extends CI_Controller
{

    private $folder   = "role/";
    private $template = "template-admin/";
    private $menu     = "Role";


    public function __construct()
    {
        parent::__construct();

        //Model
        $this->load->model('M_role');

        //CekLogin
        CekUser();
    }


    public function index()
    {
        $q = $this->M_role->GetAll();
        $data = array(
            "menu" => $this->menu,
            "submenu" => 'read',
            "data" => $q

        );
        $this->load->view($this->template . 'head', $data);
        $this->load->view($this->template . 'sidebar', $data);
        $this->load->view($this->template . 'header', $data);


        $this->load->view($this->folder . 'read', $data);

        $this->load->view($this->template . 'footer', $data);
    }
    public function create()
    {

        $data = array(
            "menu" => $this->menu,
            "submenu" => 'create'

        );
        $this->load->view($this->template . 'head', $data);
        $this->load->view($this->template . 'sidebar', $data);
        $this->load->view($this->template . 'header', $data);


        $this->load->view($this->folder . 'create', $data);

        $this->load->view($this->template . 'footer', $data);
    }
    public function save()
    {
        $data = array(
            'id' => NULL,

            'role' => $this->input->post('role')
        );
        $this->M_role->insert($data);


        redirect('role', 'refresh');
    }

    public function delete()
    {

        $id = $this->uri->segment(3);

        $this->M_role->delete($id);

        redirect('Role', 'refresh');
    }
    public function edit()
    {
        $id = $this->uri->segment(3);

        $data = array(
            "menu" => $this->menu,
            "submenu" => 'edit',
            "data" => $this->M_role->GetById($id)

        );
        $this->load->view($this->template . 'head', $data);
        $this->load->view($this->template . 'sidebar', $data);
        $this->load->view($this->template . 'header', $data);


        $this->load->view($this->folder . 'edit', $data);

        $this->load->view($this->template . 'footer', $data);
    }
}

/* End of file Role.php */
