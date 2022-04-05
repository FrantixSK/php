<?php
include("pripojenie.php");

$query = "SELECT * FROM users";

$result = $conn->query($query);
$users = [];

while($username = $result->fetch_assoc()){
    array_push($users, $username);
}






?>