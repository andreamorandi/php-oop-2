<?php
require_once __DIR__ . "/../Models/Product.php";
require_once __DIR__ . "/../Models/Food.php";
require_once __DIR__ . "/../Models/Toy.php";
require_once __DIR__ . "/../Models/Bed.php";
require_once __DIR__ . "/../Models/Accessory.php";
require_once __DIR__ . "/../Models/Category.php";
require_once __DIR__ . "/../Models/Customer.php";
require_once __DIR__ . "/../Models/ShoppingBasket.php";
require_once __DIR__ . "/../Models/CreditCard.php";


$cani = new Category('cani');
$gatti = new Category('gatti');
$categories = [$cani, $gatti];

$pandoro_cani = new Food('Pandoro per cani', 'https://www.bauzaar.it/media/catalog/product/g/r/grafiche_prodotti_magento_600x600_-_2022-11-04t111610.824.jpg?width=700&height=700&store=default&image-type=image', 3.39, [$categories[0]], 'Cibo', 400);
$cuccetta_natalizia = new Bed('Cuccetta natalizia', 'https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_3__2.jpg?width=700&height=700&store=default&image-type=image', 47.89, [$categories[0], $categories[1]], 'Cucce', '100x50');
$cerchietto_natale = new Accessory('Cerchietto di Natale', 'https://www.bauzaar.it/media/catalog/product/g/r/grafiche_prodotti_magento_600x600_-_2022-11-14t182301.791_2.jpg?width=700&height=700&store=default&image-type=image', 7.49, [$categories[0]], 'Giochi', '15x25');
$cannetta_natalizia = new Toy('Cannetta natalizia', 'https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_5__1.jpg?width=700&height=700&store=default&image-type=image', 3.39, [$categories[1]], 'Giochi', 'Plastica');
$osso_natalizio = new Toy('Osso natalizio', 'https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_4__1.jpg?width=700&height=700&store=default&image-type=image', 4.99, [$categories[0]], 'Giochi', 'Tessuto');
$coperta_disney = new Accessory('Coperta Disney', 'https://www.bauzaar.it/media/catalog/product/g/r/grafiche_prodotti_magento_600x600_8__1.png?width=700&height=700&store=default&image-type=image', 9.49, [$categories[0], $categories[1]], 'Coperte', '75x75');
$products = [$pandoro_cani, $cuccetta_natalizia, $cerchietto_natale, $cannetta_natalizia, $osso_natalizio, $coperta_disney];

$guest = new Customer("Andrea", "andrea@gmail.com");
$guest->basket = new ShoppingBasket();
$guest->basket->add($pandoro_cani);
$guest->basket->add($osso_natalizio);
$total = $guest->basket->getTotal();

$guest->insertCreditCard(new CreditCard("2364762378462387", "123", "12", "2023"));
$result = $guest->pay($total);
