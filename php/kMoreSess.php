<?php 

    session_start();
        if(!isset($_SESSION["userN"])){

            header("Location:../index.php");
        }


    $rid = $_POST["rid"];
    $_SESSION["rId"] = $rid;

    header("Location:kMore.php");

?>