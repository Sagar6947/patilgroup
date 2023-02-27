<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'Main';
// $route['admin'] = 'admin/login';
// $route['Main/products'] = 'products';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['about-us'] = 'Main/about';
$route['about-nashik'] = 'Main/about_nashik';
$route['career'] = 'Main/career';
$route['complete-project'] = 'Main/complete_project';
$route['project/(:any)/(:any)'] = 'Main/ongoing_projects/$1/$2';
$route['testimonial/(:any)/(:any)'] = 'Main/testimonials/$1/$2';
$route['contact'] = 'Main/contact';
$route['prangan-testimonial'] = 'Main/prangan_testimonial';
$route['goda-spandan'] = 'Main/goda_spandan';
$route['ekaant'] = 'Main/ekaant';
$route['prangan'] = 'Main/prangan';
