<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');

//login routes (unprotected)
//$routes->get('/', function() {
//    return redirect()->to('/anmelden');
//});
$routes->get('anmelden', 'BenutzerController::index');
$routes->get('benutzer/erstellen', 'BenutzerController::getBenutzerErstellen');
$routes->post('benutzer/erstellen', 'BenutzerController::postBenutzerErstellen');
$routes->post('benutzer/anmelden', 'BenutzerController::postBenutzerAnmelden');
$routes->get('benutzer/gast', 'BenutzerController::getGastAnmelden');

// Error routes
$routes->get('denied', 'ErrorController::index');

//protected routes

// Login Protected routes
$routes->get('/', 'HomeController::index');
$routes->get('leaderboard', 'LeaderboardController::index');

// Benutzer Protected routes
$routes->group('/', ['filter' => 'userAuthentification'], function($routes) {
    $routes->get('abmelden', 'BenutzerController::getBenutzerAbmelden');
    $routes->get('profil', 'BenutzerController::getBenutzerProfil');
    $routes->get('willkommen', 'BenutzerController::getBenutzerWillkommen');
    $routes->get('game', 'GameController::index');
    $routes->get('pacman', 'GameController::getPacman');
    $routes->post('leaderboard/submitHighscore/(:num)', 'GameController::postSubmitHighscore/$1');
    $routes->get('leaderboard/highestscore', 'LeaderboardController::getHighestScore');
    $routes->get('leaderboard/getHighscore', 'GameController::getHighscore');
});

// Admin Protected routes
$routes->group('/admin', ['filter' => 'adminAuthentification', 'namespace' => 'App\Controllers\Admin'], function($routes) {
    $routes->get('/', 'AdminController::index');
});