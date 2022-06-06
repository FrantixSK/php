<?php
include("connection.php");

$query = "SELECT * FROM articles ORDER BY created_at DESC";

$result = $conn->query($query);
$articles = [];

while($article = $result->fetch_assoc()){
    array_push($articles, $article);
}






?>