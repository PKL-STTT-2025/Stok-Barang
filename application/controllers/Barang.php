<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Barang_model');
    }

    public function index() {
        $data['barang'] = $this->Barang_model->get_all_barang();
        $this->load->view('templates/header');
        $this->load->view('barang/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_barang()
    {
    $nama_barang = $this->input->post('nama_barang');
    $stok = $this->input->post('stok');
    $satuan = $this->input->post('satuan');

    $existing = $this->db->get_where('barang', ['nama_barang' => $nama_barang])->row();

    if ($existing) {
        
        $this->db->set('stok', 'stok + ' . (int)$stok, FALSE);
        $this->db->where('id', $existing->id);
        $this->db->update('barang');
    } 
    else {
        
        $this->db->insert('barang', [
            'nama_barang' => $nama_barang,
            'stok' => $stok,
            'satuan' => $satuan
        ]);
    }

    redirect('barang');
    }

   
    public function tambah_keluar()
    {
    $id_barang = $this->input->post('id_barang');
    $jumlah = $this->input->post('jumlah');
    $tanggal = date('Y-m-d');


    $this->Barang_model->tambah_keluar($id_barang, $jumlah, $tanggal);
    redirect('barang');
    }


}

