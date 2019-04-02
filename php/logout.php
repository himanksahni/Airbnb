<?php 

    session_start();
    
    if(isset($_SESSION["userN"])){
        
        
        unset($_SESSION["userN"]);
        header("Location:../index.php");
    }

    else
        {
            header("Location:../index.php");
        }


?>