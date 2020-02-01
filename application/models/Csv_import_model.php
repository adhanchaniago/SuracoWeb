<?php
class Csv_import_model extends CI_Model
{
	function select()
	{
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get('konsumen');
		return $query;
	}

	function insert($data)
	{
		$this->db->insert_batch('konsumen', $data);
	}
	function insert1($data1)
	{
		$this->db->insert_batch('detail_kendaraan', $data1);
	}
}
