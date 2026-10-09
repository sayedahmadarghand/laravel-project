
<?php

require_once __DIR__ . '/../controllers/ProductController.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = rtrim($path, '/') ?: '/';

switch ($path) {
    case '/products':
        $controller = new ProductController();
        $result = $controller->index();

        if ($result === false) {
            http_response_code(500);
            exit('د محصولاتو ترلاسه کولو کې ستونزه ده.');
        }

        require __DIR__ . '/../products.php';
        break;

    default:
        http_response_code(404);
        echo 'پاڼه ونه موندل شوه.';
}
