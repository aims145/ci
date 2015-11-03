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
|	http://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Login';
$route['verigylogin'] = 'Verifylogin/index';
$route['logout'] = 'Logout/index';
$route['admin'] = 'admin/Dashboard/dashindex';
$route['server'] = 'admin/Server/serverlist';
$route['server/serverlist'] = 'admin/Server/serverlist';
$route['server/selectone'] = 'admin/Server/selectone';
$route['server/addserver'] = 'admin/Server/addserver';
$route['server/deleteserver'] = 'admin/Server/deleteserver';
$route['server/editserver/(:num)'] = 'admin/Server/editserver/$1';
$route['server/updateserver'] = 'admin/Server/updateserver';
$route['server/insertserver'] = 'admin/Server/insertserver';
$route['server/tools/terminal'] = 'admin/Tools/terminal';
$route['server/tools/ping'] = 'admin/Tools/ping';
$route['server/tools/installpackages'] = 'admin/Tools/InstallPackage';
$route['server/imp/commands'] = 'imp/Imp/commands';
$route['server/imp/commands/(:num)'] = 'imp/Imp/commands/$1';
$route['server/imp/addcmd'] = 'imp/Imp/addcmd';
$route['server/imp/delcmd'] = 'imp/Imp/delcmd';
$route['server/imp/editcmd'] = 'imp/Imp/editcmd';
$route['server/imp/dellink'] = 'imp/Imp/dellink';
$route['server/imp/editlink'] = 'imp/Imp/editlink';
$route['server/imp/links'] = 'imp/Imp/links';
$route['server/imp/tutos'] = 'imp/Imp/tutos';
$route['server/scheduler/remindme'] = 'scheduler/Scheduler/remindme';
$route['server/scheduler/addreminder'] = 'scheduler/Scheduler/addreminder';
$route['server/imp/selecttuto'] = 'imp/Imp/selecttuto'; 
$route['server/imp/addtutos'] = 'imp/Imp/addtutos';
$route['server/imp/deltutos'] = 'imp/Imp/deltutos';
$route['server/imp/searchresult'] = 'imp/Imp/searchresult';
$route['server/imp/addlink'] = 'imp/Imp/addlink';
$route['server/imp/selectone'] = 'imp/Imp/selectone';
$route['server/imp/updateone'] = 'imp/Imp/updateone';
$route['server/credentials'] = 'admin/Credentials/index';
$route['server/credentials/show'] = 'admin/Credentials/show';
$route['server/credentials/add'] = 'admin/Credentials/add';
$route["server/credentials/del"]="admin/Credentials/del";
$route["server/credentials/update"]="admin/Credentials/update";
$route['server/tools/selectpkgs'] = 'admin/Tools/selectedpkgs';
$route['server/serverstatus/ports'] = 'admin/Serverstatus/ports';
$route['server/serverstatus/services'] = 'admin/Serverstatus/services';
$route['server/serverstatus/servicerequest'] = 'admin/Serverstatus/servicerequest';
$route['server/serverstatus/usage'] = 'admin/Serverstatus/usage';
$route['server/serverstatus/stats'] = 'admin/Serverstatus/stats';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
