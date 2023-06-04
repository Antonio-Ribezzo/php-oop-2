<?php
require_once __DIR__ . '../../models/product.php';
require_once __DIR__ . '../../models/food.php';
require_once __DIR__ . '../../models/game.php';
require_once __DIR__ . '../../models/accessory.php';

$arrayProducts =[
    new Food("food","dog","39.90","dry","Royal Canin","Mini Adult","Linea Size Health Nutrition Mini per cani di piccola taglia.","https://egress.storeden.net/gallery/646e28dcbe7ea0251add18cf/file.jpg"),
    new Game("game","cat","2.90","IMAC","Gioco per gatti con un elastico in modo da poter giocare insieme al tuo gatto","https://egress.storeden.net/gallery/62f23b85be7ea0e1ab1e5f4f/file.jpg"),
    new Accessory("accessory","dog","30.00","Fashion Dog","Fashion Dog Body Ipoallergenico","https://egress.storeden.net/gallery/62cec13d2026281c117b6373/file.jpg"),
    new Food("food","cat","27.00","dry","Hill's","Adult","Alimento secco completo per gatti dal sesto mese di età sterilizzati.","https://egress.storeden.net/gallery/5f9041fd5fb8e01ef0d61c5f/file.jpg"),
    new Game("game","dog","5.20","TRIXIE","Bilanciere con effetto fosforescente al buio in vinile.","https://egress.storeden.net/gallery/5f9aeb6200f22050bf938a5c/file.jpg"),
    new Accessory("accessory","dog","45.00","Fashion Dog","Fashion Dog - Cappotto Impermeabile","https://egress.storeden.net/gallery/632afd15202628883d8185f0/file.jpg"),
]



?>