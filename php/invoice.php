<?php 
            
                include "connection.php";

                session_start();
                if(!isset($_SESSION["userN"])){

                    header("Location:../index.php");
                }

?>




<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/invoice.css">
    <title></title>
</head>

<body>

    <div class="container">

            
            <?php
        
                include "header.php";
        
                $rId = $_SESSION["rId"];
            
                $sql = "SELECT * FROM room WHERE rId = '$rId' ";
        
                $result = mysqli_query($con, $sql);
        
        
                $num_rows = mysqli_num_rows($result);
        
                if($num_rows == 0){
                    
                    echo "Sorry no room with that id.";
                }
        
                else{
                    
                    
                    while ($row = mysqli_fetch_assoc($result)){
                        
                        
                        echo "<main>
                
                                <h2>INVOICE</h2>";
                        
                        echo " <h4>".$row['title']."</h4>";
                        
                        echo "<p id='price'> Price : $<span id='fee'>".$row['price']. " X </span> <span id= 'guests'>" .$_SESSION["guests"]. "</span> <span> = </span> <span id='to'> </span></p>";
                        echo "
                            <p id='price'> Tax : $<span id='tax'></span></p>
                            
                            <p id='price'> Accomodation Charge : $<span id='ac'></span></p>
                
                            <p id='price'> Toatal : $<span id='total'></span></p>
                
                            <a href='profile.php' id='pay'>Pay</a>
                
                
                
                
            </main>";
                    
                    }
                    
                    
                    
                }
        
        include "../html/footer.html";
        
        
        
            ?>
            
<!--
            <main>
                
                <h2>INVOICE</h2>
                
                <h4>Cozy appartment</h4>
                
                <p id="price"> Price : <span></span></p>
                
                <p id="price"> Tax : <span></span></p>
                
                <p id="price"> Service Charge : <span></span></p>
                
                <p id="price"> Toatal : <span></span></p>
                
                <a href="php/profile.php" id="pay">Pay</a>
                
                
                
                
            </main>
-->
            
            
            
    </div> 
        

 
<script src="../js/invoice.js"></script>   
</body>
</html>