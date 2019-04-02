<?php

    include "connection.php";

    session_start();
        if(!isset($_SESSION["userN"])){

            header("Location:../index.php");
        }

    $rId = $_SESSION["rId"];
    $uId = $_SESSION["userN"];

    $dateFrom = $_POST["sDate"];

     $dateTo = $_POST["eDate"];

    $guests = $_POST["guests"];

    $_SESSION["guests"] = $guests;

    $sql = "SELECT * FROM bookings WHERE rId = '$rId' AND dateFrom = '$dateFrom' AND dateTo = '$dateTo' ";

    $result = mysqli_query($con, $sql);

    $num_rows = mysqli_num_rows($result);

    if($num_rows == 0){
        
        $sql = "INSERT INTO bookings (rId, uId, dateFrom, dateTo)
                VALUES ( '$rId' , '$uId', '$dateFrom', '$dateTo')";
        
            if(mysqli_query($con, $sql)){
                
//                echo $rId;
                $_SESSION["rId"] = $rId;
                header("Location:invoice.php");
            
            }
        
            else{
        
                echo "Sorry, your command did not execute due to ". mysqli_error($con);
        } 
        
    }

    else{
        
            $_SESSION["error"] = "Sorry there is already a booking for this place between those dates.";
            header("Location:kMore.php");
        
    }



?>