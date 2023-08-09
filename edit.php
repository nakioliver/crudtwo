<?php
include 'dbcon.php';
$id = $_GET['id'];

$sql = "select * from person where id = '$id'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2 style="color:brown;font-weight:bold;">Edit <span style="color:yellowgreen;">Form</span></h2>
    <form action="update.php" method="post">

    <!-- user id -->
    <div style="margin-top: 10px";>
            
            <input type="hidden" id="userid" name="userid" value="<?php echo $row['id'];?>">

        </div>

        <!-- label for firstname -->
        <div style="margin-top: 10px; background-color:red;">
            <label for="firstname">firstname</label><br>
            <input type="text" id="firstname" name="firstname" value="<?php echo $row['firstname'];?>">
        </div>
        <!-- label for secondname -->
        <div style="margin-top: 10px";>
            <label for="secondname">secondname</label><br>
            <input type="text" id="secondname" name="secondname" value="<?php echo $row['secondname'];?>">

        </div>
        <!-- button part -->
        <div style="margin-top: 20px;">
            <button type="submit" name="submit">Update</button>
        </div>
    
    </form>
        <!-- link to view page -->
        <div>
            <a href="view.php">back</a>

        </div>
</body>
</html>