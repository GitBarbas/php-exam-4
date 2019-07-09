<?php

$router = new Router();

$router->get('', 'PagesController@home');

/** Model: Conducteur */
$router->get('conducteur',            'ConducteursController@list');    // Liste des students
$router->get('conducteur/add',        'ConducteursController@add');      // Ajout (affichage formulaire)
$router->post('conducteur/add',       'ConducteursController@save');      // Ajout (traitement formulaire)
$router->get('conducteur/{id}/edit',  'ConducteursController@edit');     // Édition (affichage formulaire)
$router->post('conducteur/{id}/edit', 'ConducteurtsController@update');   // Édition (traitement formulaire)
$router->get('conducteur/{id}/delete', 'ConducteursController@delete');   // Suppression
$router->get('conducteur/{id}',       'ConducteursController@show'); 


/** Model: Vehicule */
$router->get('vehicule',            'VehiculesController@list');    // Liste des cours
$router->get('vehicule/add',        'VehiculesController@add');      // Ajout (affichage formulaire)
$router->post('vehicule/add',       'VehiculesController@save');      // Ajout (traitement formulaire)
$router->get('vehicule/{id}/edit',  'VehiculesController@edit');     // Édition (affichage formulaire)
$router->get('vehicule/{id}/edit',  'VehiculesController@edit');     // Édition (affichage formulaire)
$router->post('vehicule/{id}/edit', 'VehiculesController@update');   // Édition (traitement formulaire)
$router->get('vehicule/{id}/delete', 'VehiculesController@delete');   // Suppression
$router->get('vehicule/{id}',       'VehiculesController@show'); 



/** Model: Association */
$router->get('association',            'AssociationsController@list');    // Liste des inscriptions
$router->get('association/add',        'AssociationsController@add');      // Ajout (affichage formulaire)
$router->post('association/add',       'AssociationsController@save');      // Ajout (traitement formulaire)
$router->get('association/{id}/edit',  'AssociationsController@edit');     // Édition (affichage formulaire)
$router->get('association/{id}/edit',  'AssociationsController@edit');     // Édition (affichage formulaire)
$router->post('association/{id}/edit', 'AssociationsController@update');   // Édition (traitement formulaire)
$router->get('association/{id}/delete', 'AssociationsController@delete');   // Suppression
$router->get('association/{id}',       'AssociationsController@show'); 


$router->run();
