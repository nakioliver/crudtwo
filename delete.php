<?php
include 'dbcon.php';
$id = $_GET['id'];

$sql = "DELETE FROM person WHERE `person`.`id` = '$id'";
// query from the database
$query = mysqli_query($conn,$sql);
if($query){
    header('location: view.php');

}



?>