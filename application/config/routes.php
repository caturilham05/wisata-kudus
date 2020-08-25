<?php defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'C_wisata';
$route['kegiatan/(:any)'] = 'c_public/get_agenda/$1';
$route['prikitiu'] = 'Auth';
$route['404_override'] = 'my_error';
$route['translate_uri_dashes'] = FALSE;
$route['cari'] = 'Auth/cari';
