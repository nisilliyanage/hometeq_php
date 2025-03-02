<?php 
  //php local variables
  $dbhost = 'localhost';  //place where the database is hosted
  $dbuser = 'root';   
  $dbpass = ''; 
  $dbname = 'hometeq'; 
  
  //create a DB connection using a inbuilt MySQL function 
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 

  //if the DB connection fails, display an error message and exit 
  if (!$conn) 
  { 
    die('Could not connect: ' . mysqli_error($conn)); 
  } 
  
  echo "<p> Connected successfully!";

  //select the database
  mysqli_select_db($conn, $dbname); 
?> 
