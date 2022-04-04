
<?php

require_once("pripojenie.php");

$isEmpty = false;
$passCertainLength = true;
$hasPasswordMinOneNumber = true;
$samePass = true;
$passUpperCase = true;
$mailCorrectFormat = true;

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$repPassword = $_POST["repPassword"];
$number = preg_match('@[0-9]@', $password);
$uppercase = preg_match('@[A-Z]@', $password);

print_r($_POST);
echo "<br>";

 
if(strlen($password) < 5) {
 echo "Password must be at least 5 characters in length.<br>";
 $passCertainLength = false;
} else {
 echo "Your password is long enough.<br>";
}



if(strlen($password) < 5 || !$number){
echo "Password must contain at least one number.<br>";
$hasPasswordMinOneNumber = false;
} else {
 echo "Your password has at least one number.<br>";
}




if(strlen($password) < 5 || !$uppercase){
    echo "Password must have at least 1 uppercase letter.<br>";
    $passUpperCase = false;
   } else {
    echo "Your password has at least 1 uppercase letter.<br>";
   }



if($repPassword == $password){
    echo "hesla sa zhoduju <br>";
}else{
    echo "hesla sa nezhoduju <br>";
    $samePass = false;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format <br>";
    $mailCorrectFormat = false;
  }else{
      echo "correct email format <br>";
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
    echo "nieco si nezadal<br>";
}
else{
    echo "vypnil si vsetko <br>";
}


$hashed_password = MD5($_POST["password"]);

if($isEmpty == false && $samePass && $hasPasswordMinOneNumber && $passUpperCase && $mailCorrectFormat){
    $sql = "INSERT INTO users(username,email,password) VALUES ('$username', '$email', '$hashed_password')";
    if ($conn->query($sql) === TRUE) {
    echo "new record created successfully<br>";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    }














?>
