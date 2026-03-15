<?php
// criado com <3 por Levi
// github.com/ilevisz

require_once '../core/auth.php';

perform_logout();
redirect('auth/login.php');