<?php

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = rtrim($path, '/') ?: '/';

switch ($path) {
    case '/':
        require __DIR__ . '/index.php';
        break;

    case '/products':
        require __DIR__ . '/routes/web.php';
        break;

    case '/login':
    case '/login.php':
        require __DIR__ . '/login.php';
        break;

    case '/register':
    case '/register.php':
        require __DIR__ . '/register.php';
        break;

    case '/cart':
    case '/cart.php':
        require __DIR__ . '/cart.php';
        break;

    case '/contact':
    case '/contact.php':
        require __DIR__ . '/contact.php';
        break;

    case '/product-details.php':
        require __DIR__ . '/product-details.php';
        break;

    default:
        http_response_code(404);
        echo 'پاڼه ونه موندل شوه.';
        break;
}