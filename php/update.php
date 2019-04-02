<?php 

        session_start();
        if(!isset($_SESSION["userN"]))
        {
            header("Location:../index.php");
        }

        include "connection.php";

        $fname=$_POST['fName'];
        $lname=$_POST['lName'];
        
        $userName = $_SESSION["userN"]; 

        $sql = "UPDATE users SET fname = '$fname', lname = '$lname' WHERE username= '$userName'";

        mysqli_query($con,$sql);

        mysqli_close($con);

        header("Location:profile.php");
        
        
?>