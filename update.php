<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
     $userid = $_POST['userid'];
      $firstname = $_POST['firstname'];
      $secondname = $_POST['secondname'];

     $sql = "UPDATE `person` SET `firstname` = '$firstname', `secondname` = '$secondname' WHERE `person`.`id` = '$userid'";
     $query = mysqli_query($conn,$sql);
     if($query){
        header('location: view.php');
     }

}
?>