<?php
declare(strict_types=1);

// Point d'entrée du site visiteur.
$app    = require __DIR__ . '/config/app.php';
$routes = require __DIR__ . '/config/routes.php';

$default = $app['default_public_page'] ?? 'accueil';
$page    = $_GET['page'] ?? $default;

if (!is_string($page) || !isset($routes[$page])) {
    http_response_code(404);
    $page = $default;
}

$route     = $routes[$page];
$page_file = __DIR__ . '/pages/' . $route['file'];

if (!is_file($page_file)) {
    http_response_code(404);
    exit('Page introuvable.');
}

$pageTitle = $route['label'] . ' - ' . ($app['public_title'] ?? 'Clinique');

require __DIR__ . '/includes/site_header.php';
?>
    <main class="py-4">
        <?php require $page_file; ?>
    </main>
<?php
require __DIR__ . '/includes/site_footer.php';
