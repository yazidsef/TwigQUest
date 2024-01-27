<?php



// Assurez-vous d'avoir chargé l'autoloader de Composer ou les classes Twig manuellement
require_once __DIR__ . '/../config.php';


$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];
// products.php






echo $twig->render('products.html.twig', ['products' => $products, 'title' => 'page de pruduits']);