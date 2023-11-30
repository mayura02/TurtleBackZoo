<?php 

session_start(); 

#include "DbConnection.php";
$sname= "localhost";

$unmae= "root";

$password = "lolislol";

$db_name = "TurtleBackZoo";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{
        echo"here";

        $sql = "SELECT * FROM Staff WHERE Username='$uname' AND Password='$pass'";

        $result = mysqli_query($conn, $sql);
       
        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['Username'] === $uname ) {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['Username'];

                $_SESSION['name'] = $row['Fname'];

                header("Location: home.php");

                exit();

            }else{

                header("Location: index.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}