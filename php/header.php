<!--
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <title></title>
</head>

<body>
   
   
   <div class="container">
-->
        
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
//                       session_start();
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
<!--
    </div>
    
</body>
</html>
-->
