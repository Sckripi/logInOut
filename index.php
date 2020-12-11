<!doctype html>
<?php
    include "model.php";
    initSession();
    echo( $_SESSION["inited"]);
    include "header/header.php";
?>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>All fine?</title>
  <link rel="stylesheet" href="style.css" />
</head>
    
<body>
    
    <center><div class = 'body'>  
        <!-- Форма -->
        <div class = 'form'>
            <form action="controllers/logControl.php" method="POST">
                <div class = 'name'> <label>Логин: </label> <input type="text" name="login" /> </div>
                <div class = 'name'> <label>Пароль: </label> <input type="password" name="pass" /> </div>
                <div class = "logButton"><input type="submit" value="Войти" /></div> 
            </form>
            <a href="reg.php">Регистрация</a>
            <a href="#">Забыли пароль?</a>
        </div> 
        <!-- форма -->
    </div></center>
    

</body>
</html>