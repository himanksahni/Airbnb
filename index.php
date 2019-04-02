<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
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

                    <li id="signUp">Sign Up</li>
                    <li id="logInbtn">Log In</li>

                </ul>

            </nav>

        </header>


        <section class="background">

            <img src="images/background.jpg" id="backG">

        </section>

        <section class="about">

            <h2>ABOUT</h2>

            <p id="aboutPara">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio numquam reprehenderit ratione, voluptatem expedita praesentium aut enim accusamus voluptatum. Incidunt alias iure ex quam provident cumque, earum ab a architecto temporibus aliquam non atque pariatur soluta at veniam eaque blanditiis doloribus quas voluptas necessitatibus velit iste, aspernatur ratione animi. Amet non ducimus, totam rerum consequatur. Odit, repudiandae libero fugiat id magni iusto dolorum sit perferendis assumenda pariatur perspiciatis nostrum nulla labore quos ipsam officia magnam delectus, inventore beatae quisquam ullam!</p>

        </section>
        
        
        <footer>
            <h3>&copy; HOMEWAY</h3>
        </footer>


    </div>


    <div class="login_modal">

        <div class="login_content">

            <div class="login-header">

                <span class="close">&times;</span>
                <h2 id="login_heading">Log In</h2>

            </div>

            <div class="errorMsg">

                <h3 id="headingErr"> Sorry, <span class="purple">Username/password</span> is incorrect or <span class="purple">Username</span> doesnot exist.</h3>


            </div>

            <?php 
               
                    session_start();
                    if(isset($_SESSION["error"])){
                        
    
                        
                        echo "<script>document.querySelector(\".errorMsg\").style.display=\"block\"; 
                        document.querySelector(\".login_modal\").style.display=\"block\";
                        </script>";
                        
                        unset($_SESSION["error"]);
                        
                    } 
               
               
               ?>

            <div class="login_form">

                <form method="POST" action="php/logIn.php">

                    <label for="userName">Username</label><br>
                    <input type="text" name="userName" id="userName"> <br>

                    <label for="password">Password</label><br>
                    <input type="password" name="password" class="password"> <br> <br>

                    <input type="submit" value="Log In">
                </form>



            </div>

        </div>

    </div>


    <div class="signup_modal">

        <div class="signup_content">

            <div class="signup-header">

                <span class="close1">&times;</span>
                <h2 id="signup_heading">Sign Up</h2>

            </div>

            <div class="signup_form">

                <form method="POST" action="php/register.php">

                    <label for="fname">Fist Name</label><br>
                    <input type="text" name="fname" class="name">

                    <label for="lname">Last Name</label><br>
                    <input type="text" name="lname" class="name">

                    <label for="username">Username</label><br>
                    <input type="text" name="username">

                    <label for="password">Password</label><br>
                    <input type="password" name="password" class="password"> <br> <br>


                    <input type="submit" value="Sign Up">
                </form>



            </div>

        </div>

    </div>

    <script src="js/main.js"></script>
</body>

</html>
