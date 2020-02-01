<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsumen extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('Konsumen_model');
    $this->load->model('Model_cetak');
    $this->load->library('form_validation');
  }
  public function index(){
    // if (isset($this->session->uid)) {
      $data['judul'] = 'Daftar Konsumen';
      //load library
      $this->load->library('pagination');
      // ambil data keyword
      if ($this->input->post('submit')){
        $data['keyword'] = $this->input->post('keyword');
        $this->session->set_userdata('keyword', $data['keyword']);
      } else {
        $data['keyword'] = '' ;
      }
      //config
      $this->db->like('nama', $data['keyword']);
      $this->db->from('konsumen');
      $this->db->join('detail_kendaraan','nik');
      $config['total_rows'] = $this->db->count_all_results();
      $config['per_page'] = 5;
      //initialize
      $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
      $config['full_tag_close']   = '</ul></nav></div>';
      $this->pagination->initialize($config);
      $data['start'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0 ;
      $data['konsumen'] = $this->Konsumen_model->getKonsumen($config['per_page'], $data['start'], $data['keyword']);
      $data['pagination'] = $this->pagination->create_links();
      $this->load->view('templates/header', $data);
      $this->load->view('konsumen/index' ,$data);
      $this->load->view('templates/footer');
    // }else {
    //   redirect('/login_page');
    // }
  }
  public function ambil($id){
    $data['ambil'] = $this->Konsumen_model->ambil($id);
    $this->load->view('templates/header');
    $this->load->view('konsumen/ambil',$data);
    $this->load->view('templates/footer');
  }
  public function tambah(){
    $data['pesan']='0';
    $data['user']= $this->Konsumen_model->cari();
    $data['judul'] = 'Tambah Data Konsumen';
    $this->load->view('templates/header', $data);
    $this->load->view('konsumen/tambah',$data);
    $this->load->view('templates/footer');
  }
  public function simpan(){
    $id = $this->input->post('nik');
    $query = $this->db->query("SELECT * FROM konsumen WHERE nik='".$id."'");
    $rows= $query->row();
    if (empty($rows)) {
      $this->Konsumen_model->tambahDataKonsumen();
    }
    $this->Konsumen_model->tambahDataKendaraan();
    $data['pesan']='1';
    $data['user']= $this->Konsumen_model->cari();
    $data['judul'] = 'Tambah Data Konsumen';
    $this->load->view('templates/header', $data);
    $this->load->view('konsumen/tambah',$data);
    $this->load->view('templates/footer');
  }
  public function simpan_pengambilan(){
    $data['judul'] = 'Daftar Konsumen';
    $this->Konsumen_model->tambahpengambilan();
    $this->load->view('templates/header', $data);
    $this->load->view('konsumen/index',$data);
    $this->load->view('templates/footer');
  }
  public function detail($id)
  {
    $data['judul']= 'Detail Data Konsumen';
    $data['konsumen'] = $this->Konsumen_model->getKonsumenById($id);
    $this->load->view('templates/header', $data);
    $this->load->view('konsumen/detail');
    $this->load->view('templates/footer');

  }
  public function ubah($id)
  {
    $data['pesan']='0';
    $data['judul']= 'Ubah Data Konsumen';
    $data['konsumen'] = $this->Konsumen_model->getKonsumenById($id);
    $data['status'] = ['STNK dan Plat Belum Ada', 'STNK Sudah Ada dan Plat Belum Ada',
    'STNK dan Plat Sudah Ada'];
    $this->load->view('templates/header', $data);
    $this->load->view('konsumen/ubah',$data);
    $this->load->view('templates/footer');

  }
  public function simpan_perubahan($id){
    $data['pesan']='1';
    $data['judul']= 'Ubah Data Konsumen';
    $this->Konsumen_model->ubahDataKonsumen($id);
    $data['konsumen'] = $this->Konsumen_model->getKonsumenById($id);
    $this->load->view('templates/header', $data);
    $this->load->view('konsumen/ubah',$data);
    $this->load->view('templates/footer');
  }
  public function hapus($id){
    $this->Konsumen_model->hapusDataKonsumen($id);
    redirect('/');
  }
  public function cariuser(){
    $data['user']= $this->Konsumen_model->cari();
    $data['pesan']='0';
    $data['judul'] = 'Tambah Data Konsumen';
    $this->load->view('templates/header', $data);
    $this->load->view('konsumen/tambah', $data);
    $this->load->view('templates/footer');

  }
  public function cetak(){
    $tgl1 = $this->input->post('tgl_a');
    $tgl2 = $this->input->post('tgl_b');
    $data['cetak']= $this->Model_cetak->cetak($tgl1,$tgl2);
    $data['key']= '2';
    $this->load->view('print_konsumen',$data);
  }
  public function cetak_hari_ini(){
    $data['cetak'] = $this->Model_cetak->cetak_today();
    $data['key'] = '2';
    $this->load->view('print_konsumen',$data);
  }

  public function cari(){
    $data['judul'] = 'Suraco';
    $data['key'] = '2';
    $data['konsumen'] = $this->Konsumen_model->cariDataKonsumen();
    $this->load->view('templates/header', $data);
    $this->load->view('pelanggan/index', $data);
    $this->load->view('templates/footer');
  }
}
