<!DOCTYPE html>
<html>
<body>
 <link rel="stylesheet" type="text/css" href="style.css">
    

<h1>Turtle Back Zoo</h1>

<form action="login.php" method="post">

        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password"><br> 

        <button type="submit">Login</button>

     </form>


<?php
$user= "root";
$pass= "lolislol";
$db= "mysql:host=localhost;dbname=TurtleBackZoo";
try{
$pdo=new PDO($db,$user,$pass);
echo "connected beeech";
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::EERMODE_EXCEPTION);

}
catch(PDOException $e){
echo "falied to get connection".$e->getMessage();
}

?>

</body>
</html>