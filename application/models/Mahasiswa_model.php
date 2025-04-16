<?php
class Mahasiswa_model extends CI_Model {

  public function getAllMahasiswa() {
    return $this->db->get('daftar_mahasiswa')->result_array();
  }

  public function tambahDataMahasiswa() {
    $data = [
      "NPM_Mahasiswa" => $this->input->post('npm', true),
      "Nama_Mahasiswa" => $this->input->post('nama', true),
      "Email" => $this->input->post('email', true),
      "Jurusan" => $this->input->post('jurusan', true)
    ];
    $this->db->insert('daftar_mahasiswa', $data);
  }

  public function hapusDataMahasiswa($npm) {
    $this->db->delete('daftar_mahasiswa', ['NPM_Mahasiswa' => $npm]);
  }

  public function getMahasiswaByNPM($npm) {
    return $this->db->get_where('daftar_mahasiswa', ['NPM_Mahasiswa' => $npm])->row_array();
  }

  public function ubahDataMahasiswa() {
    $data = [
      "Nama_Mahasiswa" => $this->input->post('nama', true),
      "Email" => $this->input->post('email', true),
      "Jurusan" => $this->input->post('jurusan', true)
    ];
    $this->db->where('NPM_Mahasiswa', $this->input->post('npm'));
    $this->db->update('daftar_mahasiswa', $data);
  }

  public function cariDataMahasiswa() {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('Nama_Mahasiswa', $keyword);
    $this->db->or_like('Jurusan', $keyword);
    return $this->db->get('daftar_mahasiswa')->result_array();
  }
}
