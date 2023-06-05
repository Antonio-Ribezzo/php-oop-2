<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- link my style css -->
    <link rel='stylesheet' href='./style.css'>
    <!-- link fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- header -->
    <header id="ciao" class="d-flex justify-content-between align-items-center px-5">
        <!-- sx navbar -->
        <div class="d-flex justify-content-start align-items-center">
            <nav>
                <ul class="d-flex px-0 gap-3 m-0">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Cani</a>
                    </li>
                    <li>
                        <a href="#">Gatti</a>
                    </li>
                    <li>
                        <a href="#">Tutti i marchi</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- center logo-->
        <a href="#"><img id="petLogo" src="./assets/img/pet-shop-logo.png" alt="pet-shop-logo"></a>
        <!-- dx serach bar-->
        <div>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
        </div>
    </header>