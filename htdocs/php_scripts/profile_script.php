<?php
require_once('./pripojenie.php');
$username = isset($_GET["id"]) ? $_GET["id"] : "";

$sql = "SELECT * FROM users WHERE id=$username";
$result = $conn->query($sql);
$users = [];

while($username = $result->fetch_assoc()){
    array_push($users, $username);
}
?>