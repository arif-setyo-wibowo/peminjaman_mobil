<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//dashboard
$route['detail_mobil/(:num)'] = 'dashboard/detail/$1';

//kategori
$route['kategori'] = 'Admin/Kategori';
$route['kategori/tambah-edit'] = 'Admin/Kategori/insertUpdate';
$route['kategori/hapus/(:any)'] = 'Admin/Kategori/delete/$1';

//mobil
$route['mobil'] = 'Admin/Mobil';
$route['mobil/detail/(:any)'] = 'Admin/Mobil/detail/$1';
$route['mobil/tambah-edit'] = 'Admin/Mobil/insertUpdate';
$route['mobil/hapus/(:any)'] = 'Admin/Mobil/delete/$1';

//user
$route['pengguna'] = 'Admin/Pengguna';
$route['pengguna/tambah-edit'] = 'Admin/Pengguna/insertUpdate';
$route['pengguna/status/(:any)/(:any)'] = 'Admin/Pengguna/updateStatus/$1/$2';
$route['pengguna/hapus/(:any)'] = 'Admin/Pengguna/delete/$1';

//peminjaman
$route['peminjaman'] = 'Admin/Peminjaman';
$route['peminjaman/tambah-edit'] = 'Admin/Peminjaman/insertUpdate';
$route['peminjaman/selesaikan/(:any)'] = 'Admin/Peminjaman/Selesai/$1';

//pengembalian
$route['pengembalian'] = 'Admin/Pengembalian';
$route['pengembalian/delete/(:any)'] = 'Admin/Pengembalian/Delete/$1';

//Hisotry
$route['history'] = 'Admin/History';

$route['invoice'] = 'Admin/Invoice';


//login regis
$route['login'] = 'Admin/Login';
$route['register'] = 'Admin/Login/register';
$route['logout'] = 'Admin//Login/logout';