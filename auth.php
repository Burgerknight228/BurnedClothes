<?php
    setcookie('auth','YES',time() + 10, '/');
    header('Location: /')
?>