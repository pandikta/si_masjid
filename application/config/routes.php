<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
// login
$route['logout'] = 'admin/auth/logout';
$route['administrator'] = 'admin/auth';
$route['login'] = 'admin/auth';
$route['register'] = 'admin/auth/register';
//$route['*'] = 'admin/auth';

//halaman admin
$route['dashboard'] = 'admin/dashboard';
$route['pemasukan'] = 'admin/kas_masjid';
$route['pengeluaran'] = 'admin/kas_masjid/pengeluaran';
$route['rekap'] = 'admin/kas_masjid/rekap';
$route['addpengguna'] = 'admin/pengguna/add_pengguna';

$route['imam'] = 'admin/jamaah';
$route['khatib'] = 'admin/jamaah/khatib';
$route['pengurus'] = 'admin/jamaah/pengurus';
$route['muazin'] = 'admin/jamaah/muazin';
$route['remaja_masjid'] = 'admin/jamaah/remajamasjid';
$route['tambahimam'] = 'admin/jamaah/tambah_imam';
$route['tambahkhatib'] = 'admin/jamaah/tambah_khatib';
$route['tambahpengurus'] = 'admin/jamaah/tambah_pengurus';
$route['tambahmuazin'] = 'admin/jamaah/tambah_muazin';
$route['tambahremaja'] = 'admin/jamaah/tambah_imam';

$route['pengajian'] = 'admin/kegiatan';
$route['profile'] = 'admin/pengguna/edit_profile';
$route['pengguna'] = 'admin/pengguna';
$route['qurban'] = 'admin/qurban';
$route['galeri'] = 'admin/kegiatan/foto_kegiatan';
$route['katasandi'] = 'admin/pengguna/ubah_katasandi';
$route['tugasjumat'] = 'admin/kegiatan/petugas_jumat';
$route['kotaksaran'] = 'admin/kotaksaran';


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
