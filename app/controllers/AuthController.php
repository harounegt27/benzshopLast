<?php
require_once __DIR__ . '/../../models/User.php';

class AuthController {
    public function login($email, $password) {
        $userModel = new User();
        $user = $userModel->findUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            echo "Connexion réussie.";
        } else {
            echo "Email ou mot de passe incorrect.";
        }
    }
}
