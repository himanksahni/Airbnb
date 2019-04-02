<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "homeway";

    $con = mysqli_connect($servername, $username, $password);

    mysqli_select_db($con,$dbname);


?>