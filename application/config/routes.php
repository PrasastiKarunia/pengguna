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
$route['default_controller'] = 'Form_controller';
$route['1stform']	= 'form_controller/startform';
$route['2ndform'] 	= 'form_controller/save_datadiri';
$route['3rdform'] 	= 'form_controller/upd_dataperusahaan';
$route['4thform'] 	= 'form_controller/upd_bekerja';
$route['addWork']		= 'form_controller/ins_bekerja';

/*
//UPDATE ROUTES FORM CONTROLLER
$route['edit/pekerjaan/(:num)']		= 'form_controller/viewWork/$1';
$route['edit/wirausaha/(:num)']		= 'form_controller/viewBusiness/$1';
$route['update/pekerjaan/(:num)']	= 'form_controller/updateWork/$1';
$route['update/wirausaha/(:num)']	= 'form_controller/updateBusiness/$1';

$route['addWork']		= 'form_controller/ins_bekerja';
$route['addBusiness']	= 'form_controller/ins_wirausaha';

$route['review']	= 'form_controller/reviewform';
$route['1stform']	= 'form_controller/startform';
$route['2ndforms'] 	= 'form_controller/save_datadiri';
$route['2ndform']	= 'form_controller/upd_datapribadi';
$route['3rdform'] 	= 'form_controller/upd_opsi';
$route['4thform'] 	= 'form_controller/upd_bekerja';
$route['5thform'] 	= 'form_controller/upd_wirausaha';
$route['6thform'] 	= 'form_controller/upd_opsi2';
$route['7thform'] 	= 'form_controller/upd_pekerjaansebelum';
$route['8thform'] 	= 'form_controller/upd_kelulusan';
$route['9thform'] 	= 'form_controller/upd_bidikmisi';
$route['10thform'] 	= 'form_controller/upd_pencariankerja1';
$route['11thform'] 	= 'form_controller/upd_pencariankerja2';
$route['12thform'] 	= 'form_controller/upd_pencariankerja3';
$route['13thform'] 	= 'form_controller/upd_kompetensi';
$route['14thform'] 	= 'form_controller/upd_manfaat';
$route['15thform'] 	= 'form_controller/upd_keaktifan';
$route['16thform'] 	= 'form_controller/upd_kesehatan';
$route['submit']	= 'form_controller/upd_pendidikan';

//NAVIGATION FOR WORK AND BUSINESS
$route['4thforms']	= 'nav_controller/afterWork';
$route['5thforms']	= 'nav_controller/afterBusiness';

//review FORM NAV CONTROLLER
$route['review/1stform'] 	= 'nav_controller/form1st';
$route['review/2ndform'] 	= 'nav_controller/form2nd';
$route['review/3rdform'] 	= 'nav_controller/form3rd';
$route['review/4thform'] 	= 'nav_controller/form4th';
$route['review/5thform'] 	= 'nav_controller/form5th';
$route['review/6thform'] 	= 'nav_controller/form6th';
$route['review/7thform'] 	= 'nav_controller/form7th';
$route['review/8thform'] 	= 'nav_controller/form8th';
$route['review/9thform'] 	= 'nav_controller/form9th';
$route['review/10thform'] 	= 'nav_controller/form10th';
$route['review/11thform'] 	= 'nav_controller/form11th';
$route['review/12thform'] 	= 'nav_controller/form12th';
$route['review/13thform'] 	= 'nav_controller/form13th';
$route['review/14thform'] 	= 'nav_controller/form14th';
$route['review/15thform'] 	= 'nav_controller/form15th';
$route['review/16thform'] 	= 'nav_controller/form16th';
*/
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
