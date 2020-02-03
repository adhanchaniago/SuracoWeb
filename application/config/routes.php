<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['cetak'] = 'konsumen/cetak';
$route['cetak_today'] = 'konsumen/cetak_hari_ini';
$route['logout'] = 'auth/logout';
$route['kirim/(:any)'] = 'email/index/$1';
$route['cari'] = 'konsumen/cariuser';
$route['detail/(:num)/(:any)'] = 'Konsumen/detail/$1/$2';
$route['ubah/(:any)'] = 'Konsumen/ubah/$1';
$route['hapus/(:any)'] = 'Konsumen/hapus/$1';
$route['simpan_perubahan/(:any)'] = 'Konsumen/simpan_perubahan/$1';
$route['tambah'] = 'konsumen/tambah';

$route['tambah']           = 'konsumen/tambah';
$route['simpan']           = 'konsumen/simpan';

$route['login']           = 'auth/login';
$route['register']           = 'auth/register';
$route['req']           = 'auth/reg';
$route['login_page']           = 'auth';
$route['import']           = 'importdata';

$route['pengambilan/(:any)']           = 'Konsumen/ambil/$1';
$route['simpan_pengambilan']           = 'Konsumen/simpan_pengambilan';
$route['default_controller']  = 'Konsumen';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
