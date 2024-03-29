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
$route['default_controller'] = 'mainController';
$route['404_override'] = 'ErrorPages';
$route['404'] = 'ErrorPages';
$route['translate_uri_dashes'] = FALSE;
//UserController
$route['login'] = 'userController/login/';
$route['logout'] = 'userController/logout/';
$route['registro'] = 'userController/create/';
$route['nao-logado'] = 'userController/notLogged/';
$route['minha-pagina'] = 'userController/personalPage/';
$route['meus-dados'] = 'userController/personalData/';
$route['atualizar-cadastro'] = 'userController/update/';
$route['atualizar-foto'] = 'userController/changePhoto/';
//MainController
$route['/'] = 'mainController/index/';
$route['upload'] = 'uploadController/index/';
$route['do_upload'] = 'uploadController/do_upload/';
$route['contato'] = 'mainController/contact/';
$route['sobre'] = 'mainController/about/';
$route['adote'] = 'mainController/getAllPets/';
$route['pet/(:num)/mostrar'] = 'mainController/getPetByID/$1';
//RestControllers
//::::User
$route['registro-api'] = 'userRestful/createUser';
$route['login-api'] = 'userRestful/doLogin';
$route['verifica-email-api'] = 'userRestful/verifyEmail';
//::::Pets
$route['adote-api'] = 'petsRestful/getAllPets';
$route['pet-api/novo'] = 'petsRestful/createPet';
$route['pet-api/(:num)/editar'] = 'petsRestful/updatePet/$1';
$route['pet-api/(:num)/excluir'] = 'petsRestful/deletePet/$1';
$route['pet-api/(:num)/mostrar'] = 'petsRestful/getPetByID/$1';
$route['meus-pets-api/(:num)'] = 'petsRestful/getPetsByUser/$1';
#$route['meus-pets-api/(:num)'] = 'petsRestful/getPetsByUser/$1';
//PetsController
$route['meus-pets'] = 'petsController/getByUser/';
$route['novo-pet'] = 'petsController/create/';
$route['pet/(:num)/detalhes'] = 'petsController/getByID/$1';
$route['pet/(:num)/alterar'] = 'petsController/update/$1';
$route['pet/(:num)/excluir'] = 'petsController/delete/$1';
$route['pet/(:num)/adicionar-foto'] = 'petsController/uploadPhoto/$1';
