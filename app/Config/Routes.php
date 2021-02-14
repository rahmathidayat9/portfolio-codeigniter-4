<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Home::index');

// Auth
$routes->get('/login',function(){
	return view('auth/login');
});

$routes->post('/login','Login::authenticate');

$routes->post('/logout',function(){
	session()->destroy();
	return redirect()->to('/login');
});


// Admin
$routes->group('admin',['filter' => 'auth'],function($routes){

	$routes->get('/','Admin::index');
	
	// profile
	$routes->get('profile','Profile::index');
	$routes->patch('profile','Profile::updateProfile');
	$routes->get('change-password','Profile::editPassword');
	$routes->patch('change-password','Profile::updatePassword');

	// layout
	$routes->get('layout/header','Layout::header');
	$routes->post('layout/setheader/','Layout::setHeader');

	// Route Resource
	$routes->resource('users');
	$routes->resource('headers');
	$routes->resource('about');
	$routes->resource('portfolio');
	$routes->resource('footers');

});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
