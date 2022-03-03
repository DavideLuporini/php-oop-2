<?php
require_once __DIR__ . '/classes/Accessories.php';
require_once __DIR__ . '/classes/Games.php';
require_once __DIR__ . '/classes/Products.php';
require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/user.php';




// $prod1 = new Products('helki', 20);
// $prod2 = new Food('luki', 20, 'giaguar', '20/12/2023', 'carrots');
// $prod3 = new Games('flaki', 20, 'dog', 'road', 'silicon');
$prod4 = new Accessories('silki', 20, '80x20', 'Lana');

// var_dump($prod1);
// var_dump($prod2);
// var_dump($prod3);
var_dump($prod4);
