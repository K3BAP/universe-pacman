<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');

//login routes (unprotected)
$routes->get('/', function() {
    return redirect()->to('/anmelden');
});
$routes->get('anmelden', 'BenutzerController::index');
$routes->get('benutzer/erstellen', 'BenutzerController::getBenutzerErstellen');
$routes->post('benutzer/erstellen', 'BenutzerController::postBenutzerErstellen');
$routes->post('benutzer/anmelden', 'BenutzerController::postBenutzerAnmelden');
$routes->get('benutzer/gast', 'BenutzerController::getGastAnmelden');


//protected routes

//benutzer routes
$routes->get('profil', 'BenutzerController::getBenutzerProfil');
$routes->get('willkommen', 'BenutzerController::getBenutzerWillkommen');
$routes->get('game', 'GameController::index');
$routes->post('game/submitHighscore/(:num)', 'GameController::postSubmitHighscore/$1');
$routes->get('game/getHighscore', 'GameController::getHighscore');