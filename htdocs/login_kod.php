
<?php
require_once("connection.php");
$username = $_POST["username"];
$password = $_POST["password"];
$hashed_password = md5($_POST["password"]);

if(empty($username) || empty($password)){
    header("Location: ./login.php?message=niečo nezadané");
}


$sql = "SELECT * FROM users WHERE username = '".$username."'and password= '".$hashed_password."'";
echo $sql;
$result = $link->query($sql);

if($result->num_rows==1){
    session_start();
    $_SESSION["username"] = $username;

    header("Location: login.php?message=USPESNE PRIHLASENY");
}
else{
    header("Location: login.php?message=zle meno alebo heslo");
}
?>