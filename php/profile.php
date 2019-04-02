<?php 

    session_start();
    if(!isset($_SESSION["userN"])){
        
        header("Location:../index.html");
    }

?>




<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile.css">
    <title></title>
</head>

<body>



    <div class="container">

        <header>


            <div class="logo">
                <h1>HOMEWAY</h1>
            </div>
            <nav>

                <ul>

                    <li id="signUp"> <a id="settings" href="updateForm.php"><span id="signuptext">Settings </span> </a></li>
                    <li id="logInbtn">

                        <span id="logtext">
                    <?php
                       
                      include "connection.php";
                       
                       $userName=$_SESSION["userN"];
                       
                       $sql = "SELECT * FROM users WHERE username ='$userName'";
                       
                       
                       $result = mysqli_query($con, $sql);
                       
                       if($result){
                           
                           while ($row = mysqli_fetch_assoc($result)){
                               
                               
                               echo $row['fname'];
                           }
                           
                           
                       }
                       
                       else{
                           
                           
                           echo "Sorry, your command did not execute due to ". mysqli_error($con);
                       }
                       
                       
                    ?>

                            <div class="dropdown-content">
                                <a href="logout.php">Log Out</a>
                            </div>

                        </span>
                    </li>

                </ul>


            </nav>

        </header>

        <section class="background">

            <img src="../images/background.jpg" id="backG">

        </section>

        <section class="search">

            <div class="search_content">

                <form method="POST" action="searchSess.php">

                    <label for="searchBar">
                        <h2 id="searchH">Search </h2>
                    </label>

                    <select name="searchBar" id="searchBar">

                        <option value="Toronto">Toronto</option>
                        <option value="Paris">Paris</option>

                        <input type="submit" value="Search">


                    </select>


                </form>

            </div>


        </section>




        <section class="about">

            <h2>ABOUT</h2>

            <p id="aboutPara">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio numquam reprehenderit ratione, voluptatem expedita praesentium aut enim accusamus voluptatum. Incidunt alias iure ex quam provident cumque, earum ab a architecto temporibus aliquam non atque pariatur soluta at veniam eaque blanditiis doloribus quas voluptas necessitatibus velit iste, aspernatur ratione animi. Amet non ducimus, totam rerum consequatur. Odit, repudiandae libero fugiat id magni iusto dolorum sit perferendis assumenda pariatur perspiciatis nostrum nulla labore quos ipsam officia magnam delectus, inventore beatae quisquam ullam!</p>

        </section>

        <footer>
            <h3>&copy; HOMEWAY</h3>
        </footer>


    </div>

    <script src=""></script>
</body>

</html>
