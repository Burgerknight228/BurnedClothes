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
    <div id="loginForm" class="logIn-conteiner">
        <h1>Авторизация</h1>
            <form action="log-in.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин">
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль">
                <p>Нет аккаунта? <a href="#" id="showRegister"> Зарегистрироваться</a></p>
                <button class="form-btn">Войти</button>
            </form>
    </div>
    <div id="registerForm" class="register-conteiner hidden">
        <h1>Регистрация</h1>
            <form action="sign-in.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин">
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль">
                <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя">
                <p>Уже есть аккаунт? <a href="#" id="showLogin"> Войти</a></p>
                <button class="form-btn">Зарегистрироваться</button>
            </form>
    </div>
    </main>
</body>
<script>
    document.getElementById('showRegister').addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('loginForm').classList.add('hidden');
    document.getElementById('registerForm').classList.remove('hidden');
    });

    document.getElementById('showLogin').addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('registerForm').classList.add('hidden');
    document.getElementById('loginForm').classList.remove('hidden');
    });
</script>
</html>