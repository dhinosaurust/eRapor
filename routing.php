<?php

$request_uri = $_SERVER['REQUEST_URI'];

$routes = [
    '/' => 'public/view/default.php',
    '/login' => 'public/login.php',
    '/logout' => 'public/logout.php',
    '/list-pegawai' => 'public/view/list-pegawai.php'
];

if(array_key_exists($request_uri, $routes)){
    $page = $routes[$request_uri];
    include($page);
} else {
    http_response_code(404);
    echo 'halaman tidak ditemukan';
}


?>