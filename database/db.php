<?php
require_once __DIR__ . '../../models/product.php';
require_once __DIR__ . '../../models/category.php';
require_once __DIR__ . '../../models/food.php';
require_once __DIR__ . '../../models/game.php';
require_once __DIR__ . '../../models/accessory.php';
require_once __DIR__ . '../../models/typeOfProduct.php';
require_once __DIR__ . '../../traits/petSize.php';


// istanze delle categerie
$dogs = new Category('Dogs', 'fa-solid fa-dog');
$cats = new Category('Dogs', 'fa-solid fa-cat');
// istanze del tipo di prodotti
$food = new TypeOfProduct('food');
$game = new TypeOfProduct('game');
$accessory = new TypeOfProduct('accessory');


$arrayProducts =[
    new Food($food, $dogs, "39.90","dry","Royal Canin","Royal Canin Health","Mini Adult","Linea Size Health Nutrition Mini per cani di piccola taglia.","https://egress.storeden.net/gallery/646e28dcbe7ea0251add18cf/file.jpg","small"),
    new Game($game,$cats,"2.90","IMAC","Gioco per gatti","Gioco per gatti con un elastico in modo da poter giocare insieme al tuo gatto","https://egress.storeden.net/gallery/62f23b85be7ea0e1ab1e5f4f/file.jpg"),
    new Accessory($accessory,$dogs,"30.00","Fashion Dog","Body ipoallergenico","Fashion Dog Body Ipoallergenico  per cani di taglia medio-piccola","https://egress.storeden.net/gallery/62cec13d2026281c117b6373/file.jpg","small"),
    new Food($food,$cats,"27.00","dry","Hill's","Hill's Adult","Adult","Alimento secco completo per gatti dal sesto mese di età sterilizzati.","https://egress.storeden.net/gallery/5f9041fd5fb8e01ef0d61c5f/file.jpg","small"),
    new Game($game,$dogs,"5.20","TRIXIE","Gioco per cani","Bilanciere con effetto fosforescente al buio in vinile - gioco per cani.","https://egress.storeden.net/gallery/5f9aeb6200f22050bf938a5c/file.jpg"),
    new Accessory($accessory,$dogs,"45.00","Fashion Dog","Cappotto impermeabile","Fashion Dog - Cappotto Impermeabile per cani di taglia medio-piccola","https://egress.storeden.net/gallery/632afd15202628883d8185f0/file.jpg","medium"),
]



?>