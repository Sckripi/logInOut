<?php
include "../model.php";
initSession();

    unset($_SESSION['inited']);
    unset($_SESSION['err_auth']);
    unset($_SESSION['iduser']);
    unset($_SESSION['login']);
    unset($_SESSION['pass']);
    unset($_SESSION['name']);

header('Location: ../index.php');
?>