<?php
require_once __DIR__ . '/../app/controllers/AuthController.php';

$url = $_GET['url'] ?? '';

if ($url === 'signin' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new AuthController();
    $controller->login($_POST['email'], $_POST['password']);
} else {
    include __DIR__ . '/../app/views/signin.html';
}
