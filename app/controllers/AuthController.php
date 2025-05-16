<?php
class AuthController {
    public function signin() {
        require_once '../app/views/login.php';
    }

    public function signup() {
        require_once '../app/views/register.php';
    }

    public function registerUser() {
        // Ici vous ajouterez la logique pour insérer un nouvel utilisateur en BDD
        echo "Inscription réussie (à compléter avec logique BDD)";
    }

    public function loginUser() {
        // Ici vous ajouterez la logique pour vérifier les identifiants
        echo "Connexion réussie (à compléter avec logique BDD)";
    }
}
