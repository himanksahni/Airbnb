<?php 

    $userName = $_POST["userName"];
    $passWord = md5($_POST["password"]);

    include "connection.php";

    $sql = "SELECT * FROM users WHERE username = '$userName'AND password = '$passWord'";

    $result = mysqli_query($con, $sql);

    $num_rows = mysqli_num_rows($result);

    if($num_rows == 1){
        
        
        session_start();
        $_SESSION["userN"] = $userName;
        mysqli_close($con);
		header("Location:profile.php");
    }


    else
	{
		session_start();
        $_SESSION['error']="Sorry, your username and/or password is inccorrect";
        header("Location:../index.php");
      
	}

?>