<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//$route['blog']            = 'blog';                        // daftar blog

$route['blog/post']       = 'blog/post';                     // halaman penulisan blog
$route['blog/submit']     = 'blog/submit';                 // proses penyimpanan blog
$route['blog/edit/(:any)'] = 'blog/edit/$1';              //mengedit blogs
$route['user/login'] = 'user/login';                       //form login
$route['blog/subedit/(:any)'] = 'blog/subedit/$1';         //mengedit blogs
$route['blog/delete/(:any)']     = 'blog/delete/$1' ;        // delete

$route['blog/(:any)']     = 'blog/index/$1';             // baca blog dengan blog_id $1

$route['user/signin']     = 'user/signin';                // proses login user
$route['user/signout']    = 'user/signout';               // proses login user
$route['user/reg']        = 'user/register';              // halaman form registrasi user
$route['user/(:any)']     = 'user/profil/$1';  //untuk profile

$route['user/(any:)']     = 'user/$1';                     // halaman profil user dengan user_id $1

$route['isi'] = 'welcome/index';                           //home
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
