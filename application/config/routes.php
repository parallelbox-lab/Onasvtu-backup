<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'site';
$route['account/login'] = 'account/login';
$route['account/Create-account'] = 'account/register';
$route['message'] = 'site/message';

/*
backend Admin
*/

$route['admin-home'] = 'admin/adhome';
$route['admin/trans'] = 'admin/trans';
$route['admin/users'] = 'admin/users';
$route['admin/fund'] = 'admin/fund';
$route['admin/success'] = 'admin/success';
$route['admin/sme-data'] = 'admin/edit_sme';
$route['admin/edit'] = 'admin/edit';

$route['admin/admin-login'] = 'account/admin_login';

/*
dashboard home
*/
$route['dashboard'] = 'dashboard/dash_home';
$route['dashboard/mtn-data'] = 'dashboard/mtndata';
$route['dashboard/airtel-data'] = 'dashboard/airteldata';
$route['dashboard/glo-data'] = 'dashboard/glodata';
$route['dashboard/9mobile-data'] = 'dashboard/etisalatdata';
$route['dashboard/fund-wallet'] = 'dashboard/fundwallet';
$route['dashboard/edit-profile'] = 'dashboard/editprofile';
$route['dashboard/airtime'] = 'dashboard/airtime';
$route['dashboard/pay'] = 'dashboard/pay';
$route['dashboard/databundles'] = 'dashboard/buy';
$route['dashboard/transaction'] = 'dashboard/transactions';
$route['dashboard/transaction/(:any)'] = 'dashboard/transactions';

$route['dashboard/airtime-buy'] = 'dashboard/airtime_buy';
$route['dashboard/changepassword'] = 'dashboard/change_pass';
$route['dashboard/sme-data'] = 'dashboard/sme_data';
$route['dashboard/wallet-history'] = 'dashboard/wallet_history';
$route['dashboard/Buy-electricity'] = 'dashboard/electricity';
$route['dashboard/sme-buy'] = 'dashboard/sme_buy';
$route['account/forget-password'] = 'account/forget_password';
$route['account/resetlink'] = 'account/resetlink';

$route['dashboard/TV-Cables-Subscriptions'] = 'dashboard/tv_cable';
$route['dashboard/TV-Cables-Subscriptions/gotv'] = 'dashboard/gotv';
$route['dashboard/TV-Cables-Subscriptions/dstv'] = 'dashboard/dstv';
$route['dashboard/TV-Cables-Subscriptions/startimes'] = 'dashboard/startimes';

$route['logout']  = 'account/logout';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
