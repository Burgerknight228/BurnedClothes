<div class="navbar">
        <div class="conteiner">
            <img src="images/logoClothes.png" class="logo">
            <div class="navbar-wrap">
                <ul class="navbar-menu">
                    <li><a href="/">Главная</a></li>
                    <li><a href="catalog.php">Каталог</a></li>
                    <li><a href="#contact">Контакты</a></li>
                    <li><a href="#recomedation">Рекомендуем</a></li>
                </ul>
                <a href="basket.php"><img src="images/basketIcon.png" class="basketIcon"></a>
                <?php
                    if(isset($_COOKIE['auth']) && $_COOKIE['auth']=='YES'):
                ?>
                    <a href="profile.php"><img src="images/profileIcon.png" class="profileIcon"></a>
                <?php else: ?>
                    <a href="auth.php"><img src="images/profileIcon.png" class="profileIcon"></a>
                <?php endif; ?>
            </div>  
        </div>
    </div>