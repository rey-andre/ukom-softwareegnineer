<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model {
  public function get_pegawai_by_nip($nip) {
      $this->db->select('*');
      $this->db->from('tblpegawai');
      $this->db->join('tbldivisi', 'tblpegawai.Kode_Divisi = TblDivisi.Kode_divisi');
      $this->db->where('TblPegawai.NIP', $nip);
      $query = $this->db->get();
      return $query->row();
  }
  public function get_pegawai_by_divisi($kode_divisi) {
    $this->db->select('NIP, Nama');
    $this->db->from('TblPegawai');
    $this->db->where('Kode_Divisi', $kode_divisi);
    $query = $this->db->get();
    return $query->result();
  }

  public function get_all_divisi() {
      $this->db->select('Kode_divisi, Nama_divisi');
      $this->db->from('TblDivisi');
      $query = $this->db->get();
      return $query->result();
  }
}

/* End of file Pegawai_model.php */
/* Location: ./application/models/Pegawai_model.php */