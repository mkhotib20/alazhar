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
$route['default_controller'] = 'home/route';
$route['404_override'] = '';
$route['id'] = 'home/index/id';
$route['en'] = 'home/index/en';
$route['id/profile/guru'] = 'profile/guru';
$route['en/profile/guru'] = 'profile/guru';
$route['en/profile/guru/(:num)']['get'] = 'profile/detail/$1';
$route['id/profile/guru/(:num)']['get'] = 'profile/detail/$1';


$route['en/article/detail/(:num)']['get'] = 'news/detail/$1';
$route['id/article/detail/(:num)']['get'] = 'news/detail/$1';

$route['en/news'] = 'news/index';
$route['id/news'] = 'news/index';

$route['en/info'] = 'info/index';
$route['id/info'] = 'info/index';


$route['en/profile/sekolah'] = 'profile/index';
$route['id/profile/sekolah'] = 'profile/index';

$route['admin'] = 'berita/index';
$route['admin/berita/(:num)']['get'] = 'berita/index/$1';
$route['admin/berita/tulis/(:num)']['get'] = 'berita/addBerita/$1';
$route['admin/pendaftar'] = 'pendaftar/index';
$route['admin/guru'] = 'guru/index';
$route['admin/fasilitas'] = 'fasilitas/index';
$route['admin/gallery'] = 'fasilitas/gallery';

$route['gallery'] = 'fasilitas/gallery';



$route['admin/background-setting'] = 'pendaftar/background';

$route['admin/login/(:num)']['get'] = 'login/index/$1';

$route['admin/login'] = 'login/index';

$route['guru/profile'] = 'guruManagement/index';
$route['guru/article'] = 'guruManagement/article';
$route['guru/article/tambah/(:num)']['get'] = 'guruManagement/addArticle/$1';
$route['guru/riwayat-pendidikan/formal'] = 'guruManagement/riwayatPendidikan';
$route['guru/riwayat-pendidikan/non-formal'] = 'guruManagement/riwayatPendidikanNF';
$route['guru/article/edit/(:num)']['get'] = 'guruManagement/editArticle/$1';
$route['guru'] = 'guruManagement/index';


$route['translate_uri_dashes'] = FALSE;
