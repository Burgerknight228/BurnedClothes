<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burned clothes</title>
    <link rel="stylesheet" href="indexStyle.css">
</head>
<body>
    <header>
        <div class="imageLib">
        <header>
            <?php require "blocks/Header.php" ?>
        </header>
            <a href="catalog.php"><div class="Label">
                <h1>Перейти в каталог</h1>
        </div></a>
    </header>
    <main>
    <div class="catalogLinks">
        <div class ="catalogLinkImages">
            <p>ОДЕЖДА</p>
            <a href="#"><img src="images/catalogLinkImg1.jpg"></a>
        </div>
        <div class ="catalogLinkImages2">
            <p>ОБУВЬ</p>
            <a href="#"><img src="images/catalogLinkImg2.jpg"></a>
        </div>
    </div>
    <p id="recomedation">РЕКОМЕНДУЕМ</p>
    <div class="controls">
        <div class="slide_arrows">
            <img src="images/right_arrow.png" id="leftBtn">
        </div>
        <div class="slider">
            <div class="gallery">
                <span onclick="window.location='https://example.com';">
                    <img src="images/products/5.jpg">
                    <p>Шорты-карго Corteiz Alcatraz</p>
                    <div class="price">
                        <p>35 395 руб.</p>
                    </div>
                </span>
                <span onclick="window.location='https://example.com';">
                    <img src="images/products/6.jpg">
                    <p>Футболка Palace x Thrasher</p>
                    <div class="price">
                        <p>24 292 руб.</p>
                    </div>
                </span>
                <span onclick="window.location='product.html';">
                    <img src="images/products/1.jpg">
                    <p>Пуховик Jordan Essentials</p>
                    <div class="price">
                        <p>14 490 руб.</p>
                    </div>
                </span>
                
            </div>
            <div class="gallery">
                <span onclick="window.location='https://example.com';">
                    <img src="images/products/4.jpg">
                    <p>Adidas Retropy E5</p>
                    <div class="price">
                        <p>3 100 руб.</p>
                    </div>
                </span>
                <span onclick="window.location='https://example.com';">
                    <img src="images/products/2.webp">
                    <p>Adidas campus</p>
                    <div class="price">
                        <p>3 699 руб.</p>
                    </div>
                </span>
                <span onclick="window.location='https://example.com';">
                    <img src="images/products/3.jpg">
                    <p>Air Max 90 Black Mesh Swoosh</p>
                    <div class="price">
                        <p>4 900 руб.</p>
                    </div>
                </span>
            </div>
        </div>
        <div class="slide_arrows">
            <img src="images/left_arrow.png" id="rightBtn">
        </div>
    </div>
    
</main>
    <footer>
        <?php require "blocks/Footer.php" ?>
    </footer>
    <script src="slider.js"></script>
</body>
</html>