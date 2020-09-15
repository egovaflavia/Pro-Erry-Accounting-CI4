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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = true;

// Out of CRUD Controller
$route['admin']['GET']                  = 'Admin/index';
$route['login']                         = 'Auth/login';
$route['logout']                        = 'Auth/logout';
$route['training/(:num)']['GET']        = 'Home/training/$1';
$route['detail-training/(:num)']['GET'] = 'Home/training_detail/$1';
$route['detail-service/(:num)']['GET']  = 'Home/service_detail/$1';
$route['detail-event']                  = 'Home/event_detail/';
$route['home/profil']                   = 'Home/profil/';

// Slide
$route['slide']['GET']         = 'Slide/index';
$route['slide/create']         = 'Slide/create';
$route['slide/(:num)']['GET']  = 'Slide/index/$1';
$route['slide']['POST']        = 'Slide/create';
$route['slide/delete']['POST'] = 'Slide/delete';
$route['slide/update']['POST'] = 'Slide/update';

// Event Fix 
$route['event']['GET']         = 'Event/index';
$route['event/create']         = 'Event/create';
$route['event/(:num)']['GET']  = 'Event/index/$1';
$route['event']['POST']        = 'Event/create';
$route['event/delete']['POST'] = 'Event/delete';
$route['event/update']['POST'] = 'Event/update';

// Partner Fix
$route['partner']['GET']         = 'Partner/index';
$route['partner/create']         = 'Partner/create';
$route['partner/(:num)']['GET']  = 'Partner/index/$1';
$route['partner']['POST']        = 'Partner/create';
$route['partner/delete']['POST'] = 'Partner/delete';
$route['partner/update']['POST'] = 'Partner/update';

// Team Fix
$route['team']['GET']         = 'Team/index';
$route['team/create']         = 'Team/create';
$route['team/(:num)']['GET']  = 'Team/index/$1';
$route['team']['POST']        = 'Team/create';
$route['team/delete']['POST'] = 'Team/delete';
$route['team/update']['POST'] = 'Team/update';

// Category Training Fix
$route['category-training']['GET']         = 'CategoryTraining/index';
$route['category-training/create']         = 'CategoryTraining/create';
$route['category-training/(:num)']['GET']  = 'CategoryTraining/index/$1';
$route['category-training']['POST']        = 'CategoryTraining/create';
$route['category-training/delete']['POST'] = 'CategoryTraining/delete';
$route['category-training/update']['POST'] = 'CategoryTraining/update';

// Service Fix
$route['service']['GET']         = 'Service/index';
$route['service/create']         = 'Service/create';
$route['service/(:num)']['GET']  = 'Service/index/$1';
$route['service']['POST']        = 'Service/create';
$route['service/delete']['POST'] = 'Service/delete';
$route['service/update']['POST'] = 'Service/update';

// Category Service Fix
$route['category-service']['GET']         = 'CategoryService/index';
$route['category-service/create']         = 'CategoryService/create';
$route['category-service/(:num)']['GET']  = 'CategoryService/index/$1';
$route['category-service']['POST']        = 'CategoryService/create';
$route['category-service/delete']['POST'] = 'CategoryService/delete';
$route['category-service/update']['POST'] = 'CategoryService/update';

// Banner Fix
$route['banner']['GET']         = 'Banner/index';
$route['banner/create']         = 'Banner/create';
$route['banner/(:num)']['GET']  = 'Banner/index/$1';
$route['banner']['POST']        = 'Banner/create';
$route['banner/delete']['POST'] = 'Banner/delete';
$route['banner/update']['POST'] = 'Banner/update';

// Profil Fix
$route['profil/(:num)']['GET']  = 'Profil/index/$1';
$route['profil/update']['POST'] = 'Profil/update';

// Training
$route['training']['GET']               = 'Training/index';
$route['training/create']               = 'Training/create';
$route['training/(:num)']['GET']        = 'Training/index/$1';
$route['training/detail/(:num)']['GET'] = 'Training/detail/$1';
$route['training']['POST']              = 'Training/create';
$route['training/delete']['POST']       = 'Training/delete';
$route['training/update']['POST']       = 'Training/update';
