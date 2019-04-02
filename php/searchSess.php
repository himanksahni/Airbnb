<?php 

    session_start();
        if(!isset($_SESSION["userN"])){

            header("Location:../index.php");
        }


    $city = $_POST["searchBar"];
    $_SESSION["place"] = $city;

    header("Location:search.php");

?>

