<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/update.css">
	<title>Update Info</title>
</head>
<body>
    
    <div class="container">

	<?php
    
        
        session_start();
        if(!isset($_SESSION["userN"]))
        {
            header("Location:../index.php");
        }
    
		include "connection.php";
    
			$userName=$_SESSION["userN"];
        
            include "header.php";

			$sql="SELECT * FROM users where username='$userName'";

			$result=mysqli_query($con,$sql);


			while($row=mysqli_fetch_assoc($result))
			{
				$firstname=$row['fname'];
				$lastname=$row['lname'];
                
             }
	?>
	
	<main>

	<form method="POST" action="update.php">

		<label> First Name</label>
		<input type="text" name="fName" id="fName" value= <?php echo $firstname; ?> > <br><br>

		<label> Last Name</label>
		<input type="text" name="lName" id="lName" value=<?php echo $lastname; ?> > <br><br>

	    <input type="submit" value="Update"> <br><br>
	</form>
	
	</main>
	
	<?php 
    
        include "../html/footer.html";
    
    ?>
    
    </div>
    
    



</body>
</html>