<!DOCTYPE html>
  <html>
    <head>
      <title>Dr. Western's Vet Clinic- Your Pets</title>
      <meta charset = 'utf-8'>
    </head>

    <body>
       <?php include 'connectdb.php';?>
         <!--This makes sure we open a connection to the db-->
       

       <h1>Here are your pets</h1>
	 <ol>

           <?php 
             $whichOwner= $_POST["petowners"];
                //we get this from the last page
             $query = 'SELECT * FROM owner,pet WHERE pet.ownerid = owner.ownerid AND pet.ownerID="'.$whichOwner.'"';
                //this is our actual query - but we haven't sent it in yet
             $result=mysqli_query($connection,$query);
              //this sends our query in 
             if(!$result) {
                 die("database query2 failed.");
               }
             while ($row=mysqli_fetch_assoc($result)) {
                echo '<li>';
                echo $row["petname"];
		echo '<img src="' . $row["petpicture"] . '" height="60" width="60">';
              }

             mysqli_free_result($result);
            ?>
              
                <!-- this is our php script to import the info we want -->
         </ol>
      
         <?php mysqli_close($connection);?>


    </body>
  </html>
