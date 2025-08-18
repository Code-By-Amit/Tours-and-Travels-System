<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/profile', 'Home::profile');

$routes->get('/dashboard/my-bookings', 'BookingController::myBookings');

$routes->get('/explore', 'TourController::explore');
$routes->get('/tour/(:num)', 'TourController::tourdetails/$1');
$routes->post('book-tour/(:num)', 'BookingController::bookTour/$1');

$routes->get('/dashboard/edit-profile', 'UserController::updateProfile');
$routes->post('/dashboard/updateprofile', 'UserController::updateProfile');


$routes->get('/dashboard', 'DashboardController::index');

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::login');

$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::register');

$routes->get('/logout', 'Auth::logout');

$routes->get('user', 'Dashboard::user');       // user dashboard
$routes->post('user/delete-account', 'UserController::deleteAccount');       // user dashboard
$routes->get('dashboard/user/change-password', 'UserController::changepassword');       // user dashboard
$routes->post('dashboard/user/change-password', 'UserController::changepassword');       // user dashboard

$routes->post('dashboard/user/cancel-booking/(:num)', 'BookingController::cancelBooking/$1');     // user dashboard

$routes->post('dashboard/admin/manage-users/role/(:num)', 'UserController::changeUserRole/$1');     // admin dashboard

$routes->get('dashboard/admin/manage-users', 'UserController::index');     // admin dashboard
$routes->get('dashboard/admin/manage-tours', 'TourController::index');     // admin dashboard
$routes->get('dashboard/admin/manage-tours/create', 'TourController::create');     // admin dashboard
$routes->post('dashboard/admin/manage-tours/create', 'TourController::create');     // admin dashboard
$routes->get('dashboard/admin/manage-tours/edit/(:num)', 'TourController::edit/$1');     // admin dashboard
$routes->post('dashboard/admin/manage-tours/edit/(:num)', 'TourController::update/$1');     // admin dashboard
$routes->post('dashboard/admin/manage-tours/delete/(:num)', 'TourController::delete/$1');     // admin dashboard