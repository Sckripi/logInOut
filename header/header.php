<head>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<header > 
    
    <nav>
        <?php
            if($_SESSION["inited"]){
                echo 
                "<div class='logname'><a href='#'> Пользователь: ". $_SESSION["name"]." </a> 
                <a href='controllers/logOut.php'>ВЫХОД</a></div>";
            }
        else{               
            echo "<a href='index.php'>ВХОД</a>";
        }
        ?>
    </nav>

</header>  
