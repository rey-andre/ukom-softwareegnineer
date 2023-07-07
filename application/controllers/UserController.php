<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class UserController extends CI_Controller
{
    

  public function index()
  {
    $this->load->model('Pegawai_model');
    $nip = $this->input->post('nip'); // Ambil NIP dari inputan pengguna
    $data['pegawai'] = $this->Pegawai_model->get_pegawai_by_nip($nip);
    $this->load->view('index', $data);
    // $this->load->view('index');
  }

  public function divisi()
  {
    $this->load->model('Pegawai_model');
    $kode_divisi = $this->input->post('divisi'); // Ambil Kode Divisi dari inputan pengguna
    $data['kode_divisi'] = $this->input->post('divisi');
    $data['pegawai'] = $this->Pegawai_model->get_pegawai_by_divisi($kode_divisi);
    $data['divisi'] = $this->Pegawai_model->get_all_divisi();
    $this->load->view('divisi', $data);
  }
  
  public function presensi()
  {
    $this->load->model('Presensi_model');
    $tanggal = $this->input->post('tanggal'); // Ambil tanggal dari inputan pengguna
    $data['tanggal'] = $this->input->post('tanggal');
    $data['presensi'] = $this->Presensi_model->get_presensi_by_tanggal($tanggal);
    $this->load->view('presensi', $data);
  }

  public function export_pdf()
  {
    
  }

  public function export_excel()
  {
    
  }

}


/* End of file UserController.php */
/* Location: ./application/controllers/UserController.php */