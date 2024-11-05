<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burned clothes</title>
    <link rel="stylesheet" href="catalogStyle.css">
</head>
<body>
    <header>
        <?php require "blocks/Header.php" ?>
    </header>
    <div class="page-navigation">
        <div class="navigation">
            <a href="index.php">Главная</a>
            <p>>> Каталог</p>
        </div>
    </div>
    <main>
        <div class="label">
            <p>Каталог</p>
        </div>
        <div class="menu">
             <a href="">Верхняя одежда</a>
             <a href="">Футболки</a>
             <a href="">Брюки</a>
             <a href="">Аксессуары</a>
             <a href="">Обувь</a>
        </div>
    <div class="catalog-conteiner">
        <div class="catalog">
            <?php
                for($i=0;$i<10;$i++):
            ?>
            <div class="product">
                <img src="images/catalogLinkImg2.jpg" alt="">
                <p>Кроссовки Air max 95</p>
                <a href=""><div class="price">
                    <p>4 500 руб.</p>
                </div></a>
            </div>
            <?php
                endfor;
            ?>
        </div>
    </div>
    </main>
    <footer>
        <?php require "blocks/Footer.php" ?>
    </footer>
    </body>
</html>