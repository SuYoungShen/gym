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

// 前台
$route['in'] = 'pos/in';//會員進場 in 20180611
$route['out'] = 'pos/out';//會員出場 in 20180611
$route['login'] = 'pos/login';//登入 in 20180616
$route['logout'] = 'pos/logout';//登出 in 20180625
// 前台

//後台
$route['console'] = 'console/offer';//登入 in 20180616
//後台
$route['api_console/offer'] = 'api_console/offer';// 優惠方案api in 20180618
$route['api_console/staff'] = 'api_console/staff';// 員工api in 20180618
$route['api_console/member'] = 'api_console/member';// 會員api in 20180622

$route['default_controller'] = 'pos/in';//會員進場 in 20180611
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
