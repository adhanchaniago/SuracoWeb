<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Importdata extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('csv_import_model');
		$this->load->library('csvimport');
	}
	function index()
	{
		$data['info'] = $this->csv_import_model->tampilkan();
		$data['judul'] = "Import Data";
		$this->load->view('templates/header', $data);
		$this->load->view('import',$data);
		$this->load->view('templates/footer');
	}

	public function import(){
		$file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
		foreach($file_data as $row){
			// $id = $row["nik"];
			// $query = $this->db->query("SELECT * FROM konsumen WHERE nik='".$id."'");
			// $rows= $query->row();
			// if (empty($rows)) {
			$data[] = array(
				'nik'	=>	$row["nik"],
				'nama'		=>	$row["nama"],
				'alamat'			=>	$row["alamat"],
				'kota'			=>	$row["kota"],
				'telp'			=>	$row["telp"],
				'email'			=>	$row["email"]
			);
		// }
		$data1[] = array(
			'nik'	=>	$row["nik"],
			'norang'		=>	$row["norang"],
			'sales'			=>	$row["sales"],
			'type'			=>	$row["type"],
			'status'			=>	$row["status"],
			'tanggal'			=>	$row["tanggal"]
		);
		}
		$this->csv_import_model->insert($data);
		$this->csv_import_model->insert1($data1);
		 redrect('/import');
	}

}
