<?php

ini_set('display_errors', 'on');

// La fonction callback prend un paramètre (dont le nom est arbitraire) 
// et représente le nom de la classe que l'on a essayé de charger
// La fonction callback est appelée à chaque fois que l'on essaie d'instancier une classe
spl_autoload_register(function ($className) {
    require 'classes/' . $className . '.php';
    
    // Version concaténation
    // require 'classes/' . $className . '.php';
});

$rectangle = new Rectangle(100, 100, 'limegreen', 0.8, 200, 150);
$ellipse = new Ellipse(350, 350, 'firebrick', 0.7, 40, 80);

$container = new ShapeContainer(800, 600);
$container
    ->addShape($rectangle)
    ->addShape(new Rectangle(0, 0, 'blue', 0.5, 50, 100))
    ->addShape($ellipse);

require 'index.phtml';