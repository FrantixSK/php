<?php

require_once ('connection.php');

$uname = $_POST["username"];
$psw = $_POST["password"];

$sqlu = "SELECT * FROM `users` WHERE username = '$uname'";
$sqlp = "SELECT * FROM `users` WHERE password = '$psw'";
$id1 = "SELECT User_ID FROM `users` WHERE username = '$uname'";
$id2 = "SELECT User_ID FROM `users` WHERE password = '$psw'";
$r_u = mysqli_query($link, $sqlu);
$r_p = mysqli_query($link, $sqlp);
$r_idu = mysqli_query($link, $id1);
$r_idp = mysqli_query($link, $id2);



if (mysqli_num_rows($r_u) == 1 && mysqli_num_rows($r_p) > 0 && $idu == $idp) {
    echo "Login successful.";
    header('Location: index.php');
}
else{
    echo "ERROR";
}