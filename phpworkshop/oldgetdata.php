<?php
   $query = "SELECT fname, lname, petname FROM owner, pet WHERE pet.ownerid=owner.ownerid";  
   // $query = "SELECT DISTINCT species FROM pet;"
   // $query = "SELECT * FROM pet";
   // $query = "SELECT DISTINCT FROM pet";
  $result = mysqli_query($connection,$query);

  if(!$result) {
    die("databases query failed.");
  }
  echo "<ol>";  
  while($row = mysqli_fetch_assoc($result)){
     //While there's still stuff left to fetch
     echo "<li>";
         //write the <li>, (show that we're in a list)
      echo $row["fname"];
        // don't quite know why we separate the vars like this but do it
      echo " ";
        // echo = print into the php doc what's in the brackets
      echo $row["lname"];
      echo " -- ";
      echo $row["petname"]."</li>";
         //AND concactnate the thing with the tag species things with the ending tag (/li) 
     //var_dump($row);
        //This command is showing us everything that is returned
        //Let's get rid of it and make it prettier
    //echo $row;
}
mysqli_free_result($result);
 //marks end of loop
echo "</ol>";
   //ends list
?>

