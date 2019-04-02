<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/search.css">
    <title></title>
</head>

<body>

    <div class="container">

        <?php 



        session_start();
        if(!isset($_SESSION["userN"])){

            header("Location:../index.php");
        }

        $city = $_SESSION["place"];
        

        include "header.php";

        include "connection.php";

        $sql = "SELECT * FROM room WHERE location = '$city'";

        $result = mysqli_query($con, $sql);
        $num_rows = mysqli_num_rows($result);

    ?>

        <main>



            <?php

                if($num_rows == 0){


                    echo "Sorry, No places are currently available in this area.";
                }


                else{

                    echo "<h3><u>Rooms in " .$city. "</u></h3>";


                while($row=mysqli_fetch_assoc($result))
                {

                    echo "<div class='ab1'> <img src='" .$row['img_sml']. "' alt='room picture'>";
                    echo " <div class='ab'><h4>".$row['title']. "</h4>";
                    echo "<p>" .$row['description']. "<p>";
                    echo "<h5>Price: $" .$row['price']. "/person</h5>";
            //        echo "<a href=''>Read More / Book</a> <br>";
                    echo "<form method = 'POST' action = 'kMoreSess.php' > <input type='text' value= '" .$row['rId']. "' name='rid'> <input type='submit' name = '" .$row['rId']. "' value='Know More/Book'> </form> </div></div><br>";


                }


                }


            ?>

        </main>

        <?php
            include "../html/footer.html";
       
        ?>



    </div>


</body>

</html>
