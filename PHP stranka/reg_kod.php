
<?php

require_once("pripojenie.php");

$isEmpty = false;
$passCertainLength = true;
$hasPasswordMinOneNumber = true;
$samePass = true;
$passUpperCase = true;

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$repPassword = $_POST["repPassword"];
$number = preg_match('@[0-9]@', $password);
$uppercase = preg_match('@[A-Z]@', $password);

print_r($_POST);
echo "<br>";

 
if(strlen($password) < 5) {
 echo "Password must be at least 5 characters in length.";
 $passCertainLength = false;
} else {
 echo "Your password is long enough.";
}



if(strlen($password) < 5 || !$number){
echo "Password must contain at least one number.";
$hasPasswordMinOneNumber = false;
} else {
 echo "Your password has at least one number.";
}




if(strlen($password) < 5 || !$uppercase){
    echo "Password must have at least 1 uppercase letter.";
    $passUpperCase = false;
   } else {
    echo "Your password has at least 1 uppercase letter.";
   }



if($repPassword == $password){
    echo "hesla sa zhoduju <br>";
}else{
    echo "hesla sa nezhoduju <br>";
    $samePass = false;
}



if(empty($_POST["username"])){
    $isEmpty = true;
}

if(empty($_POST["email"])){
    $isEmpty = true;
}

if(empty($_POST["password"])){
    $isEmpty = true;
}

if(empty($_POST["repPassword"])){
    $isEmpty = true;
}

if($isEmpty == true){
    echo "nieco si nezadal";
    echo "<br>";
}
else{
    echo "zadal si vsetko";
    echo "<br>";
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

if($isEmpty == false && $samePass && $hasPasswordMinOneNumber && $passUpperCase){
    $sql = "INSERT INTO users(username,email,password) VALUES ('$username', '$email', '$hashed_password')";
if ($conn->query($sql) === TRUE) {
echo "new record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
else{
    header('Location: register.php');
}













?>
