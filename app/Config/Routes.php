<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// app/Config/Routes.php

$routes->get('/', 'Home::index');
$routes->post('/login', 'AuthController::login');



$routes->get('inicio', 'Inicio::index'); //Inicio del administrador
$routes->get('menu/menuAdAlumno', 'Inicio::menu'); //Menu para administrar alumnos
$routes->get('menu/menuAdMaestro', 'Inicio::menuMaestro'); //Menu para administrar maestros
$routes->get('menu/menuAdMateria', 'Inicio::menuMateria'); //Menu para administrar materias
$routes->get('inicioMaestro', 'InicioMaestro::index'); //Inicio del maestro
$routes->get('menu/menuAdCalificaciones', 'InicioMaestro::menuCalificaciones'); //Menu para administrar calificaciones
$routes->get('inicioAlumno', 'InicioAlumno::index'); //Inicio del alumno



//Funciones administrador
    //Funciones del alumno 
$routes->get('/admin', 'AdminController::index');
$routes->get('/admin/agregarAlumno', 'AdminController::agregarAlumno');
$routes->get('/admin/editarAlumno/(:num)', 'AdminController::editarAlumno/$1');
$routes->get('/admin/deleteAlumno/(:num)', 'AdminController::deleteAlumno/$1');
$routes->post('/admin/insertAlumno', 'AdminController::insertAlumno');
$routes->post('/admin/updateAlumno', 'AdminController::updateAlumno');
$routes->get('/admin/buscarAlumno', 'AdminController::buscarAlumno');
$routes->get('/admin/mostrarAlumno', 'AdminController::mostrarAlumno');

    //Funciones del maestro
$routes->get('/admin/agregarMaestro', 'AdminController::agregarMaestro');
$routes->get('/admin/editarMaestro/(:num)', 'AdminController::editarMaestro/$1');
$routes->get('/admin/deleteMaestro/(:num)', 'AdminController::deleteMaestro/$1');
$routes->post('/admin/insertMaestro', 'AdminController::insertMaestro');
$routes->post('/admin/updateMaestro', 'AdminController::updateMaestro');
$routes->get('/admin/buscarMaestro', 'AdminController::buscarMaestro');
$routes->get('/admin/mostrarMaestro', 'AdminController::mostrarMaestro');

    //Funciones de la materia
$routes->get('/admin/agregarMateria', 'AdminController::agregarMateria');
$routes->get('/admin/editarMateria/(:num)', 'AdminController::editarMateria/$1');
$routes->get('/admin/mostrarMateria', 'AdminController::mostrarMateria');
$routes->get('/admin/deleteMateria/(:num)', 'AdminController::deleteMateria/$1');
$routes->post('/admin/insertMateria', 'AdminController::insertMateria');
$routes->post('/admin/updateMateria', 'AdminController::updateMateria');
$routes->get('/admin/buscarMateria', 'AdminController::buscarMateria');

//Funciones alumno
$routes->get('/alumno', 'AlumnoController::index');
$routes->get('/alumno/informacion', 'AlumnoController::informacion');
$routes->get('/alumno/calificacionesAlumno', 'AlumnoController::calificacionesAlumno');

//Funciones maestro
$routes->get('/maestro', 'MaestroController::index');
$routes->get('/maestro/informacion', 'MaestroController::informacion');
$routes->get('/maestro/mostrarCalificaciones', 'MaestroController::mostrar');
$routes->get('/maestro/agregarCalificaciones', 'MaestroController::agregar');
$routes->get('/maestro/editar/(:num)', 'MaestroController::editar/$1');
$routes->post('/maestro/insert', 'MaestroController::insert');
$routes->post('/maestro/update', 'MaestroController::update');
