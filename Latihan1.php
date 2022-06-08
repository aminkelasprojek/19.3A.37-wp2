<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan1 extends CI_Controller {

    public function index(){


        echo "Selamat datang.... selamat belajar web programming";
        
    }
    public function penjumlahan($n1,$n2)
    {

        $this->load->model('M_latihan1');

        $hasil = $this->M_latihan1->jumlah($n1, $n2);
        echo "Hasil penjumlahan dari".$n1 ." + $n2 = $hasil";

        $data = array(
            'nilai1'  => $n1,
            'nilai2'  => $n2,
            'hasil'  => $this->M_latihan1->jumlah($n1,$n2)
        );

        $this->load->view('v_latihan1', $data);
        

    }
}


    
