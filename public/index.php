<?php

require_once __DIR__ . '/../vendor/autoload.php';

$products = ['Tomate', 'Oignon', 'Abricot', 'Navet', 'Citrouille'];

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View');
$twig = new Twig\Environment($loader);
echo $twig->render("index.html.twig", ['products' => $products]);