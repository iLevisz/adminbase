<?php
// criado com <3 por Levi
// github.com/ilevisz

require_once 'core/auth.php';

if (is_logged_in()) {
    redirect('pages/dashboard.php');
} else {
    redirect('auth/login.php');
}