<?php
// criado com <3 por Levi
// github.com/ilevisz

function redirect($path) {
    header("Location: " . BASE_URL . ltrim($path, '/'));
    exit;
}

function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

function get_brand_html() {
    return '<span class="brand-main">BASEADMIN</span><span class="brand-sub">ilevisz</span>';
}