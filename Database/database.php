<?php
require_once __DIR__ . "/../Models/Product.php";
require_once __DIR__ . "/../Models/Category.php";

$categories = [
    new Category('Cani'),
    new Category('Gatti')
];

$products = [
    new Product('Pandoro per cani', 'https://www.bauzaar.it/media/catalog/product/g/r/grafiche_prodotti_magento_600x600_-_2022-11-04t111610.824.jpg?width=700&height=700&store=default&image-type=image', 3.39, [$categories[0]], 'Cibo'),
    new Product('Cuccetta natalizia', 'https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_3__2.jpg?width=700&height=700&store=default&image-type=image', 47.89, [$categories[0], $categories[1]], 'Cucce'),
    new Product('Cerchietto di Natale', 'https://www.bauzaar.it/media/catalog/product/g/r/grafiche_prodotti_magento_600x600_-_2022-11-14t182301.791_2.jpg?width=700&height=700&store=default&image-type=image', 7.49, [$categories[0]], 'Giochi'),
    new Product('Cannetta natalizia', 'https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_5__1.jpg?width=700&height=700&store=default&image-type=image', 3.39, [$categories[1]], 'Giochi'),
    new Product('Osso natalizio', 'https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_4__1.jpg?width=700&height=700&store=default&image-type=image', 4.99, [$categories[0]], 'Giochi'),
    new Product('Coperta Disney', 'https://www.bauzaar.it/media/catalog/product/g/r/grafiche_prodotti_magento_600x600_8__1.png?width=700&height=700&store=default&image-type=image', 9.49, [$categories[0], $categories[1]], 'Coperte'),
];
