<?php
include "../model.php";
initSession();
$users = checkUser($_POST["login"], $_POST["pass"]);
if($users == 0 ){
    echo "никого";
}
else{
    $_SESSION['inited']=true;
    $_SESSION['err_auth']=false;

    $user = getUser($_POST["login"], $_POST["pass"]);

    $_SESSION['iduser']=$user["id"];
    $_SESSION['login']=$user["login"];
    $_SESSION['pass']=$user["pass"];
    $_SESSION['name']=$user["name"];

}

header('Location: ../profile.php');
?>