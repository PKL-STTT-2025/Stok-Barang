<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index($nama = '')
    {
        $data ['judul']= 'Halaman Home';
        $data ['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('home/index.php');
        $this->load->view('templates/footer');
    }
}
