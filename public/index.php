<?php
// public/index.php

// Démarrer une session si nécessaire (utile pour la gestion des utilisateurs connectés)
session_start();

// Inclure automatiquement les classes du core
require_once '../core/Router.php';

// Instancier le routeur et appeler la méthode route
$router = new Router();
$router->route();
