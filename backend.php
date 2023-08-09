<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
     $firstname = $_POST['firstname'];
     $secondname = $_POST['secondname'];

     if(empty($firstname)){
        ?>
        <script>
        alert('Enter First name');
        window.location="index.php";
        </script>

        <?php
     }
     if(empty($secondname)){
        ?>
        <script>
        alert('Enter second name');
        window.location="index.php";
    
    </script>

     <?php
        
        
    }
    ?>

    <?php
        // inserting into the database
        $sql = "INSERT INTO `person` (`id`, `firstname`, `secondname`) VALUES (NULL, '$firstname', '$secondname')";
        $query = mysqli_query($conn,$sql);
        if($query){
            echo "data inserted";
            // redirecting to index page
            // header('location: index.php');

            // redirecting to view page
            header('location: view.php');
        }
        else{
            echo "Error occured";
        }
     
}

?>