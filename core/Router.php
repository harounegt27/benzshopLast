<?php
// core/Router.php

class Router {
    public function route() {
        // Lire l'URL depuis le paramètre GET
        $url = isset($_GET['url']) ? explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL)) : [];

        // Définir le contrôleur, la méthode et les paramètres
        $controllerName = !empty($url[0]) ? ucfirst($url[0]) : 'AuthController';
        $methodName = isset($url[1]) ? $url[1] : 'signin';
        $params = array_slice($url, 2);

        $controllerFile = '../app/controllers/' . $controllerName . '.php';

        // Vérifier si le fichier du contrôleur existe
        if (file_exists($controllerFile)) {
            require_once $controllerFile;

            // Vérifier si la classe existe
            if (class_exists($controllerName)) {
                $controller = new $controllerName();

                // Vérifier si la méthode existe
                if (method_exists($controller, $methodName)) {
                    call_user_func_array([$controller, $methodName], $params);
                } else {
                    echo "Méthode '$methodName' introuvable dans le contrôleur '$controllerName'.";
                }
            } else {
                echo "Classe '$controllerName' introuvable.";
            }
        } else {
            echo "Contrôleur '$controllerName' introuvable.";
        }
    }
}
