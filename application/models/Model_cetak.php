<?php

class Model_cetak extends CI_model {

  public function cetak($tgl1,$tgl2){
    $query = $this->db->query("SELECT * from konsumen inner join detail_kendaraan using(nik) where tanggal between '$tgl1' and '$tgl2'");
    return $query->result_array();
  }
  public function cetak_today(){
    $tgl = date('Y-m-d');
    $query = $this->db->query("SELECT * from konsumen inner join detail_kendaraan using(nik) where tanggal ='".$tgl."'");
    return $query->result_array();
  }
}
