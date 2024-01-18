<?php



// Assurez-vous d'avoir chargé l'autoloader de Composer ou les classes Twig manuellement
require_once  '../vendor/autoload.php';


$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];
// products.php




$loader = new \Twig\Loader\FilesystemLoader('/path/to/your/templates');
$twig = new \Twig\Environment($loader);


echo $twig->render('products.html.twig', ['products' => $products]);