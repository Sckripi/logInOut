<?php
    $link = false;
        
    function openDB(){      
        global $link;
        $link = mysqli_connect("localhost", "root", "", "users");
        mysqli_query($link, "SET NAMES utf8");
    }
    
    function closeDB(){
        global $link;
        mysqli_close($link);   
    }

    function addUsers($name, $surname, $phoneNumder, $email, $login, $pass){
    
        global $link;
        openDB();
        $res = mysqli_query($link, "INSERT INTO users (users.name, users.surname, users.phoneNumder, users.mail, users.login, users.pass)
        VALUES('$name', '$surname', '$phoneNumder', '$email', '$login', '$pass')"); 
        // echo("INSERT INTO users (users.name, users.surname, users.phoneNumder, users.mail, users.login, users.pass)
        // VALUES('$name', '$surname', '$phoneNumder', '$email', '$login', '$pass')");
        closeDB();
        return($res);
    }

    function checkUser($log, $pass){
        global $link; 
        openDB();
        $pass = md5($pass);
        $res = mysqli_query($link, "SELECT count(*) as res from users where users.login = '$log' and users.pass = '$pass' ");
        // echo("SELECT count(*) as res from users where users.login = '$log' and users.pass = '$pass' ");
        $a = mysqli_fetch_assoc($res);
        if ($a["res"] == 0){
            return(0);
        }
        else {
            return(1);
        }
    }

    function getUser($log, $pass){
        global $link; 
        openDB();
        $pass = md5($pass);
        $res = mysqli_query($link,"SELECT * from users where users.login = '$log' and users.pass = '$pass'");
        $a = mysqli_fetch_assoc($res);
        return($a);
    }

    function initSession(){
        session_start();
        if(!isset($_SESSION['inited']))
        {
            $_SESSION['inited']=false;
            $_SESSION['err_auth']=true;
            $_SESSION['iduser']="";
            $_SESSION['login']="";
            $_SESSION['pass']="";
            $_SESSION['name']="";
        }
        return $_SESSION['inited'];
    }

?>