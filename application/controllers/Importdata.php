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
		$data['judul'] = "Import Data";
		$this->load->view('templates/header', $data);
		$this->load->view('csv_import');
		$this->load->view('templates/footer');
	}
	function load_data()
	{
		$result = $this->csv_import_model->select();
		$output = '
		<div class="table-responsive">
		<table class="table table-bordered table-striped">
		<tr>
		<th>ID</th>
		<th>Nik</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Kota</th>
		<th>Telp</th>
		<th>Email</th>
		</tr>
		';
		if($result->num_rows() > 0)
		{
			foreach($result->result() as $row)
			{
				$output .= '
				<tr>
				<td>'.$row->id.'</td>
				<td>'.$row->nik.'</td>
				<td>'.$row->nama.'</td>
				<td>'.$row->alamat.'</td>
				<td>'.$row->kota.'</td>
				<td>'.$row->telp.'</td>
				<td>'.$row->email.'</td>
				</tr>
				';
			}
		}
		else
		{
			$output .= '
			<tr>
			<td colspan="5" align="center">Data not Available</td>
			</tr>
			';
		}
		$output .= '</table></div>';
		echo $output;
	}

	function import()
	{
		$file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
		foreach($file_data as $row)
		{
			$id = $row["nik"];
			$query = $this->db->query("SELECT * FROM konsumen WHERE nik='".$id."'");
			$rows= $query->row();
			if (!isset($rows)) {
				$data[] = array(
					'nik'	=>	$row["nik"],
					'nama'		=>	$row["nama"],
					'alamat'			=>	$row["alamat"],
					'kota'			=>	$row["kota"],
					'telp'			=>	$row["telp"],
					'email'			=>	$row["email"]
				);
			}
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
	}

}
