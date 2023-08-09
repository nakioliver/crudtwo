
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">back</a>
    <!-- table for the students details -->
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Second name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'dbcon.php';
            $sql = "select * from person";
            $query = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['secondname']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id'];?>">edit</a>/<a href="delete.php?id=<?php echo $row['id'];?>">delete</a>
                </td>
            </tr>

                    <?php
            }
            

            ?>
            
        </tbody>
    </table>
</body>
</html>