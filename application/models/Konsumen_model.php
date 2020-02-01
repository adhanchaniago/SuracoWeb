<?php

class Konsumen_model extends CI_model {

  public function getKonsumen($limit, $start, $keyword = null)
  {
    if( $keyword ){
      $query = $this->db->query("SELECT * From konsumen inner join detail_kendaraan using(nik) where nama like '%$keyword%' or norang like '%$keyword%' limit $start,$limit");
    }else {
      $query = $this->db->query("SELECT * From konsumen inner join detail_kendaraan using(nik) limit $start, $limit");
    }
    return $query->result_array();
  }

  public function tambahDataKonsumen(){
    $data = [
      "nik" => $this->input->post('nik',true),
      "nama" => $this->input->post('nama',true),
      "alamat" => $this->input->post('alamat',true),
      "telp" => $this->input->post('telp',true),
      "email" => $this->input->post('email',true)
    ];
    $this->db->insert('konsumen', $data);
  }
  public function tambahpengambilan(){
    $norang = $this->input->post('norang');
    $status1 = $this->input->post('stnk');
    $tgl1 = $this->input->post('tgl_stnk',true);
    $tgl2 = $this->input->post('tgl_plat',true);
    $query = $this->db->query("SELECT * FROM detail_pengambilan where norang='" .$norang. "'");
    $row = $query->row();
    if (isset($row)) {
      if (isset($status1)) {
        $data=[
          "nama2" => $this->input->post('pengambil_plat',true),
          "tgl2" => date('Y-m-d',strtotime($tgl2)),
          "status2" => $this->input->post('plat',true)
        ];
        $this->db->where('norang', $norang);
        $this->db->update('detail_pengambilan', $data);
      }else {
        $data=[
          "nama1" => $this->input->post('pengambil_stnk',true),
          "tgl1" => date('Y-m-d',strtotime($tgl1)),
          "status1" => $this->input->post('stnk',true)
        ];
        $this->db->where('norang', $norang);
        $this->db->update('detail_pengambilan', $data);
      }
    }else {
      if (isset($status1)) {
        $data = [
          "norang" => $this->input->post('norang',true),
          "status1" => $this->input->post('stnk',true),
          "tgl1" => date('Y-m-d',strtotime($tgl1)),
          "nama1" => $this->input->post('pengambil_stnk',true),
        ];
        $this->db->insert('detail_pengambilan', $data);
      }else {
        $data = [
          "norang" => $this->input->post('norang',true),
          "status2" => $this->input->post('plat',true),
          "tgl2" => date('Y-m-d',strtotime($tgl2)),
          "nama2" => $this->input->post('pengambil_plat',true)
        ];
        $this->db->insert('detail_pengambilan', $data);
      }
    }
  }
  public function tambahDataKendaraan(){
    $data = [
      "nik" => $this->input->post('nik',true),
      "norang" => $this->input->post('norang',true),
      "type" => $this->input->post('type',true),
      "status" => $this->input->post('status',true)
    ];
    $this->db->set('tanggal', 'NOW()', FALSE);
    $this->db->insert('detail_kendaraan', $data);
  }

  public function countAllKonsumen(){
    return $this->db->get('konsumen')->num_rows();
  }
  public function ambil($id){
    $query = $this->db->query("SELECT * FROM detail_pengambilan where norang= '".$id."'");
    return $query->row_array();
  }
  public function hapusDataKonsumen($id){
    $this->db->where('id', $id);
    $this->db->delete('konsumen');
  }
  public function getKonsumenById($id){
    $query = $this->db->query("SELECT * From konsumen inner join detail_kendaraan using(nik) where id='".$id."'");
    return $query->row_array();
  }
  public function cari(){
    $nik = $this->input->post('nik');
    $query = $this->db->query("SELECT * From konsumen  where nik='".$nik."'");
    return $query->row_array();
  }

  public function ubahDataKonsumen($id){
    $data = [
      "nama" => $this->input->post('nama',true),
      "alamat" => $this->input->post('alamat',true),
      "telp" => $this->input->post('telp',true),
      "email" => $this->input->post('email',true)
    ];
    $this->db->where('id', $id);
    $this->db->update('konsumen', $data);
    $data=[
      "type" => $this->input->post('type',true),
      "status" => $this->input->post('status',true)
    ];
    $this->db->where('nik', $this->input->post('nik'));
    $this->db->update('detail_kendaraan', $data);
  }

  public function cariDataKonsumen()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('nama', $keyword);
    $this->db->or_like('norang', $keyword);
    return $this->db->get('konsumen')->result_array();
  }

  public function printallkonsumen()
  {
    return $this->db->get('konsumen')->result_array();
  }

}
