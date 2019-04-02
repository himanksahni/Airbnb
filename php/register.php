<?php

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $userName = $_POST["username"];
    $password_1 = md5($_POST["password"]);

    include "connection.php";


    $sql = "SELECT * FROM users WHERE username = '$userName'";

    $result = mysqli_query($con, $sql);
    $num_rows = mysqli_num_rows($result);

    if($num_rows == 0){

        $sql = "INSERT INTO users (fname, lname, username, password ) 
            VALUES ('$fname', '$lname', '$userName', '$password_1')";

        if(mysqli_query($con, $sql)){
        
            session_start();
            $_SESSION["userN"] = $userName;
            header("Location:profile.php");
        
        }

        else{
        
            echo "Sorry, your command did not execute due to ". mysqli_error($con);
        } 
        
    }


    else{
        
        session_start();
        $_SESSION['error']="Sorry, your username already taken";
        header("Location:../index.php");
    }



    mysqli_close($con);
    
    


?>
