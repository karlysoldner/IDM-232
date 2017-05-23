<?php

  // Step 1: Create Database Connection
//local

 $host = $_SERVER['HTTP_HOST'];
 if ($host == 'localhost') {
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "root";
  $dbname = "Projects";
}
  else {
  // Remote database credentials
  $dbhost = "localhost";
  $dbuser = "karlyso1_Project";
  $dbpass = "Ratty123";
  $dbname = "karlyso1_Projects";
}


  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Check the connection is good with no errors
  if (mysqli_connect_errno()) {
    die ("Database connection failed: " .
      mysqli_connect_error() .
      " (" . mysqli_connect_errno() . ")"
    );
  }
  // Step 2: Preform Database Query
  $query = "SELECT * FROM projects WHERE type = 'digital media'";
  $result = mysqli_query($connection, $query);
  // Check there are no errors with our SQL statement
  if (!$result) {
    die ("Database query failed.");
  }
 while ($row = mysqli_fetch_assoc($result)) {
       echo "<figure>";
       echo "<img src=\"{$row['image']}\" alt=\"{$row['title']}\" />";
       echo "<figcaption>{$row['id']}: {$row['title']}</figcaption>";
       echo "<p>{$row['name']}</p>";
       echo "<p>{$row['description']}</p>";
       echo "</figure>";
       echo "<hr />";
     }


 
   // while ($row = mysqli_fetch_assoc($result)) 

 
    mysqli_free_result($result);

  mysqli_close($connection);
 ?>