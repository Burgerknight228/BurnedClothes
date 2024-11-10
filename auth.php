<?php
    setcookie('auth','YES',time() + 10, '/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="indexStyle.css">
    <link rel="stylesheet" href="authStyle.css">
</head>
<body>
    <header>
        <?php require "blocks/header.php" ?>
    </header>
    <main>
    <div class="register-conteiner">
        <h1>Регистрация</h1>
            <form action="check.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин">
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль">
                <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя">
                <button class="form-btn">Зарегистрироваться</button>
            </form>
    </div>
    </main>
    <footer>
        <?php require "blocks/footer.php" ?>
    </footer>
</body>
</html>