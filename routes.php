<?php

$router->get('', 'PagesController@home');

$router->get('about', 'PagesController@about');

// $router->get('about/culture', 'controllers/about-culture.php');

$router->get('contact', 'PagesController@contact');

$router->get('users', 'UsersController@index');

$router->post('users', 'UsersController@store');

