<!DOCTYPE html>
  <html>
    <head>
       <meta charset= 'utf-8'>
       <title>Dr. Western's Vet Clinic- Your Pets</title>
    </head>
    <body>
       <?php
           include 'upload_file.php';    
           include 'connectdb.php';
       ?>
       
       <h1>Here are your pets:</h1>
          <ol>
             <?php
		$whichOwner=$_POST["petowners"];
		$petName=$_POST["petname"];
		$species=$_POST["species"];
		$query1= 'SELECT MAX(petid) as maxid from pet';
                   //this lets us increase petid in chronological order
		$result=mysqli_query($connection,$query1);
		
		if(!$result) {
		     die("database max query failed.");
		}

		$row=mysqli_fetch_assoc($result);
                $newkey=intval($row["maxid"])+1;
		    // now we're creating the new key- increment the petid by one
		$petid=(string)$newkey;
		$query = 'INSERT INTO pet values("' . $petid . '","' . $petName . '","' . $species . '","' . $whichOwner . '", "'.$petpic.'")';
		    // This is the sql command to insert the new pet into the DB
		if (!mysqli_query($connection,$query)){
		     die("Error: insert failed".mysqli_error($connection));
                }
		
		echo "Your pet was added!";
		
		mysqli_close($connection);
             ?>
          </ol>
 		

    </body>

  </html>
