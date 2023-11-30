<?php 

session_start();

 ?>
<!DOCTYPE html>
<html>
<body>
 <link rel="stylesheet" type="text/css" href="style.css">
    

<h1>Turtle Back Zoo</h1>

<h1>Hello, <?php echo $_SESSION['name']; ?></h1>

<a href="logout.php">Logout</a>


</body>
</html>