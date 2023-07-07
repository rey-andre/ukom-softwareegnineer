<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presensi_model extends CI_Model {
    public function get_presensi_by_tanggal($tanggal) {
        $this->db->select('TblPresensi.*, TblPegawai.Nama');
        $this->db->from('TblPresensi');
        $this->db->join('TblPegawai', 'TblPresensi.NIP = TblPegawai.NIP');
        $this->db->where('TblPresensi.Tanggal', $tanggal);
        $query = $this->db->get();
        return $query->result();
    }
}



/* End of file Presensi_model.php */
/* Location: ./application/models/Presensi_model.php */