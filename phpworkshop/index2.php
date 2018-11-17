<!Doctype html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Dr. Western's Vet Clinic</title>
  </head>

  <body>
    <?php include 'connectdb.php'?>
	<!-- Need to include this so we connect to the db-->

    <h1>Welcome to the Western Vet Clinic</h1>
    <h2>Our Customers</h2>

    <form action="getpets.php" method = "post">
        <!-- we're telling the page to send this info to the next page-->
      <?php include 'getdata.php'?>
          <!-- This is us putting in the sql query-->
         <input type="submit" value= "Get Pet Names">
    </form>
    
    <p>
    <hr>
       <!-- adds a line break-->
    <p>
    <h2>ADD A NEW PET</h2>
    <form action="addnewpet.php" method="post">
         New Pet's Name: <input type="text" name="petname"><br>
         New Pet's Species: <br>
           <input type ="radio" name="species" value="dog">Dog<br>
           <input type ="radio"	name="species" value="cat">Cat<br>
           <input type ="radio"	name="species" value="bird">Bird<br>  
           <input type ='file' name='file' id='file'><br> 
        For which customer: <br>
           <?php include 'getdata.php'?>
           <input type="submit" value= "Add New Pet">
    </form>  
            
    <?php mysqli_close($connection);?> 
  </body>
</html>
