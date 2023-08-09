<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <h2 style="color:brown;font-weight:bold;">students <span style="color:yellowgreen;">Form</span></h2>
    <form action="backend.php" method="post">

        <!-- label for firstname -->
        <div style="margin-top: 10px; background-color:red;">
            <label for="firstname">firstname</label><br>
            <input type="text" id="firstname" name="firstname">
        </div>
        <!-- label for secondname -->
        <div style="margin-top: 10px";>
            <label for="secondname">secondname</label><br>
            <input type="text" id="secondname" name="secondname">

        </div>
        <!-- button part -->
        <div style="margin-top: 20px;">
            <button type="submit" name="submit">submit</button>
        </div>
        <!-- link to view page -->
        <div>
            <a href="view.php">view all details</a>

        </div>
    </form>
</body>
</html>