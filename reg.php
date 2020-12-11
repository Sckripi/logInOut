<!doctype html>

<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>Встал.</title>
  <link rel="stylesheet" href="style.css" />
</head>
    
<body>
    
    <center><div class = 'body'>  
        <!-- Форма -->
        <div class = 'form'>
            <form action="controllers/regControl.php" method="POST">
                <div class = 'name'> <label >Имечко: </label> <input type="text" name="name" /> </div>
                <div class = 'name'> <label>Фамилия: </label> <input type="text" name="surname" /> </div>
				<div class = 'name'> <label>Телефон: </label> <input type="text" name="phoneNumber" /> </div>
                <div class = 'name'> <label>eMail: </label> <input type="text" name="mail" /> </div>
                <div class = 'name'> <label>Логин: </label> <input type="text" name="login" /> </div>
                <div class = 'name'> <label>Пароль: </label> <input type="password" name="pass" /> </div>

                <div><input type="submit" value="Кобанчиком" /></div>
            </form>
        </div> 
        <!-- форма -->
    </div></center>
    

</body>
</html>