<?php
// criado com <3 por Levi
// github.com/ilevisz

session_start();

require_once __DIR__ . '/../config/app.php';
require_once __DIR__ . '/functions.php';

function is_logged_in() {
    return isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true;
}

function require_login() {
    if (!is_logged_in()) {
        redirect('auth/login.php');
    }
}

function require_guest() {
    if (is_logged_in()) {
        redirect('pages/dashboard.php');
    }
}

function attempt_login($login, $password) {
    $credentials = require __DIR__ . '/../config/credentials.php';
    
    $valid_login = ($login === $credentials['username'] || $login === $credentials['email']);
    $valid_password = ($password === $credentials['password']);

    if ($valid_login && $valid_password) {
        $_SESSION['user_logged_in'] = true;
        $_SESSION['user_name'] = $credentials['username'];
        return true;
    }
    
    return false;
}

function perform_logout() {
    session_unset();
    session_destroy();
}