<?php

require_once("connection.php");

$isEmpty = false;

$title = $_POST["title"];
$autor = $_POST["autor"];
$text = $_POST["text"];
$fotka = "fotka.png";

print_r($_POST);
echo "<br>";


if(empty($_POST["title"])){
    $isEmpty = true;
}

if(empty($_POST["autor"])){
    $isEmpty = true;
}

if(empty($_POST["text"])){
    $isEmpty = true;
}

if($isEmpty == true){
    echo "nieco si nezadal<br>";
}
else{
    echo "vypnil si vsetko <br>";
}


if($isEmpty == false){
    $sql = "INSERT INTO articles(title,text,cover_image,autor) VALUES ('$title','$text','$fotka','$autor')";
    if ($conn->query($sql) === TRUE) {
    echo "new record created successfully<br>";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    }