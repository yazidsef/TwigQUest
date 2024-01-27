
<?php 
use Twig\Extension\DebugExtension;
require_once __DIR__ . '/vendor/autoload.php';
$loader=new Twig\Loader\FilesystemLoader(__DIR__.'/src/view');
$twig = new Twig\Environment($loader, [
    'debug' => true,  // Enable debug mode
]);
$twig->addExtension(new DebugExtension());