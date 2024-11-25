<?php
    $login = htmlspecialchars(trim($_POST['login']), ENT_QUOTES);
    $pass = htmlspecialchars(trim($_POST['pass']),ENT_QUOTES);

    $mysql = new mysqli('MySQL-8.2', 'root', '', 'BurnedClothesDB');
    $result = $mysql ->query("SELECT `pass` FROM `users`");

    $mysql->close();
    
    setcookie('auth','YES',time() + 10, '/');
    echo "{$result['pass']}"
    //header('Location: profile.php')
?>