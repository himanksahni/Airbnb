<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/kMore.css">
    <title></title>
</head>

<body>

    <div class="container">

        <?php 



        session_start();
        if(!isset($_SESSION["userN"])){

            header("Location:../index.php");
        }

        $id = $_SESSION["rId"]; 

        include "header.php";

        include "connection.php";

        $sql = "SELECT * FROM room WHERE rId = '$id'";

        $result = mysqli_query($con, $sql);
        $num_rows = mysqli_num_rows($result);

    ?>




            <?php
        

                if($num_rows == 0){


                    echo "Sorry, No places are currently available in this area.";
                }


                else{
                    
                    
                    
                    echo "<main>";

                    while($row=mysqli_fetch_assoc($result))
                    {

                    echo "<img src='" .$row['img_lrg']. "' alt='room picture'>";
                    echo "<h2>".$row['title']. "</h2>";
                    
                    echo " <div class='icons'>

                            <img class='svg' src='../images/svg/guest.svg' alt='guest svg'> <span class='icon-text'> 2 Guests</span>
                            </div>
                            
                            <div class='icons'>

                            <img class='svg' src='../images/svg/appartment.svg' alt='apparment svg'> <span class='icon-text'>
                            Appartment
                            </span>

                            </div>

                            

                                <div class='space'></div>

                                <div class='icons'>

                                    <img class='svg' src='../images/svg/bath.svg' alt='bath svg'> <span class='icon-text'> 1 Bath</span>
                                    </div>
            

                                <div class='icons'>

                                    <img class='svg' src='../images/svg/bed.svg' alt='bed svg'> <span class='icon-text'> 1 Bed</span>

                                    </div>";
                    
                    
                    echo "<h4> Description </h4>";
                    
                    echo "<p>" .$row['description']. "<p>";
                    
                    
                    echo "<h4> About the Place </h4>";
                    
                    echo "<p>".$row['descripLrg']."</p>";
                    
                    echo "<h4> Guest Access </h4>";
                    
                    echo "<p>".$row['guest_access']."</p>";
                    
                    echo "<h4> Ammenities </h4>";
                    
                    echo "<div class='icons'>

                            <img class='svg' src='../images/svg/wifi.svg' alt='Wifi svg'> <span class='icon-text'> Television</span>

                        </div>
                    
                    
                    
                            <div class='icons'>

                            <img class='svg' src='../images/svg/tv.svg' alt='Tv svg'> <span class='icon-text'> Television</span>

                        </div>

                        <div class='space'></div>

                        <div class='icons'>

                        <img class='svg' src='../images/svg/location.svg' alt='Location svg'> <span class='icon-text'> Downtown</span>
                    </div>

                    <div class='icons'>

                        <img class='svg-1' src='../images/svg/temerature.svg' alt='Tempertaure svg'> <span class='icon-text'> Heating</span>
                    </div>";
                        
                        
//                    echo "<h5>Price: $" .$row['price']. "/person</h5>";
            //        echo "<a href=''>Read More / Book</a> <br>";
//                    echo "<form method = 'POST' action = 'kMore.php' > <input type='submit' name = '" .$row['rId']. "' value='Know More/Book'></form> <br>";
                    
                    
                    
                    echo "</main>";
                    
                    echo " <section class='footerfix'></section>

                            <footer>
                                <h5 id=price> Price: $100/person </h5>
                                <div id='bookBtn'> <span id='bookBtn1'> Book </span></div>
                            </footer>

                        </div>





                        <div class='book_modal'>

                            <div class='book_content'>

                                <div class='login-header'>

                                    <span class='close'>&times;</span>
                                    <h2 id='login_heading'>Book</h2>

                                </div>

                                <div class='errorMsg'>

                                    <h3 id='headingErr'>Sorry, there is already a booking for this place between those dates. </h3>


                                </div>";


                    if(isset($_SESSION["error"])){
                                           
                        
                                           
                    echo "<script>document.querySelector(\".errorMsg\").style.display=\"block\"; 
                    document.querySelector(\".book_modal\").style.display=\"block\";
                    </script>";
                                           
                    unset($_SESSION["error"]);
                                           
                    }
       
                    
                    
                    echo "
                            <div class='login_form'>

                                <form method='POST' action='bookings.php'>

                                    <label for='sDate'>Chek In</label><br>
                                    <input type='date' name='sDate' id='sDate'> <br>

                                    <label for='eDate'>Check Out</label><br>
                                    <input type='date' name='eDate' class='eDate'> <br> <br>

                                    <label for='guests'>Guests</label><br>
                                    <input type='text' name='guests' class='guests'> <br> <br>

                                    <input type='submit' value='Book'>
                                </form>



                            </div>

                        </div>

                    </div>";


                }


                }


            ?>



    </div>

<script src="../js/book.js"></script>
</body>



</html>


