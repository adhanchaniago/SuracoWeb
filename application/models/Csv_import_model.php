<?php
class Csv_import_model extends CI_Model
{
	function tampilkan()
	{
		$query = $this->db->query("SELECT * From konsumen order by id desc");
		return $query->result_array();
	}

	public function insert($data){
		$this->db->insert_batch('konsumen', $data);
	}
	function insert1($data1){
		$this->db->insert_batch('detail_kendaraan', $data1);
	}
}
