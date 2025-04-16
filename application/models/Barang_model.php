<?php
class Barang_model extends CI_Model {

    public function get_all_barang() {
        return $this->db->get('barang')->result();
    }

    public function tambah_barang_masuk() {
        $id = $this->input->post('id');
        $jumlah = $this->input->post('jumlah');

        $this->db->insert('barang_masuk', [
            'id' => $id,
            'tanggal' => date('Y-m-d'),
            'jumlah' => $jumlah
        ]);

        $this->db->set('stok', 'stok + ' . $jumlah, FALSE);
        $this->db->where('id', $id);
        $this->db->update('barang');
    }

    public function tambah_keluar($id_barang, $jumlah, $tanggal)
    {   
    $this->db->insert('barang_keluar', [
        'id_barang' => $id_barang,
        'tanggal_keluar' => $tanggal,
        'jumlah_keluar' => $jumlah
    ]);

    $this->db->set('stok', 'stok - ' .(int) $jumlah, FALSE);
    $this->db->where('id', $id_barang);
    $this->db->update('barang');
    }

}


    


