<?php
include "../model.php";

$users=addUsers($_POST["name"], $_POST["surname"], $_POST["phoneNumber"],$_POST["mail"] , $_POST["login"], $_POST["pass"]);
header('Location: ../index.php');
?>