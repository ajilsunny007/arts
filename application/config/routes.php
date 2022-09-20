<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'MainController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route[''] = 'MainController/index';
$route['About-Us'] = 'MainController/AboutUs';
$route['Projects'] = 'MainController/Projects';
$route['Contact-Us'] = 'MainController/ContactUs';
$route['Admin-Login'] = 'MainController/Login';
$route['Login-Check'] = 'MainController/Login_Check';
$route['Dashboard'] = 'MainController/Dashboard';
$route['Category'] = 'MainController/Category';
$route['Add-Category'] = 'MainController/Add_Category';
$route['Delete-Category'] = 'MainController/Delete_Category';
$route['Logout'] = 'MainController/Logout';
$route['Add-Project'] = 'MainController/Add_Project';
$route['Upload-Project'] = 'MainController/Upload_Project';
$route['Project-View/(:any)'] = 'MainController/Project_View/$1';
$route['Edit-Project/(:any)'] = 'MainController/Edit_Project/$1';
$route['Delete-Image'] = 'MainController/Delete_Image';
$route['Update-Project'] = 'MainController/Update_Project';
$route['Delete-Project'] = 'MainController/Delete_Project';
$route['Category-View'] = 'MainController/Category_View';
$route['Project-Details/(:any)/(:any)'] = 'MainController/Project_Details/$1/$2';
$route['View-Category-Home'] = 'MainController/View_Category_Home';
$route['View-Category'] = 'MainController/View_Category';
$route['Send-Mail'] = 'MainController/Send_Mail';
