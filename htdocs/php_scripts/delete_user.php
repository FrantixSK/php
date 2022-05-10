<?php include('../pripojenie.php');

$sql = "DELETE FROM users WHERE id =".$_GET['id'];
$user = null;

if($conn->query($sql) === TRUE){
echo "RECORD DELETED SUCCESSFULLY";
}else{
echo "ERROR DELETING".$conn->error;
}
