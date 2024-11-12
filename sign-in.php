<?php
    $login = htmlspecialchars(trim($_POST['login']), ENT_QUOTES);
    $pass = htmlspecialchars(trim($_POST['pass']),ENT_QUOTES);
    $name = htmlspecialchars(trim($_POST['name']),ENT_QUOTES);

    if(mb_strlen($login) < 5 || mb_strlen($login)>20){
        echo "Недопустимая длина логина";
        exit();
    }else if(mb_strlen($pass) < 2 || mb_strlen($pass)>32){
        echo "Недопустимая длина пароля";
        exit();
    }else if(mb_strlen($name) < 3 || mb_strlen($name)>20){
        echo "Недопустимая длина имени";
        exit();
    }

    $mysql = new mysqli('MySQL-8.2', 'root', '', 'BurnedClothesDB');
    $mysql ->query("INSERT INTO `users` (`login`, `pass`, `name`)
    VALUES('$login', '$pass', '$name')");

    $mysql->close();
    
    setcookie('auth','YES',time() + 10, '/');
?>