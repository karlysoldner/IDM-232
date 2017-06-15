<?php

  // Step 1: Create Database Connection
 $host = $_SERVER['HTTP_HOST'];
//($host == 'localhost' ) {
  //$dbhost = "localhost";
  //$dbuser = "root";
  //$dbpass = "root";
  //$dbname = "Projects";
//}
//else {
  //Remote database credentials
 $dbhost = "localhost";
  $dbuser = "karlyso1_Project";
  $dbpass = "Ratty123";
  $dbname = "karlyso1_Projects";
//}

  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Check the connection is good with no errors
  if (mysqli_connect_errno()) {
    die ("Database connection failed: " .
      mysqli_connect_error() .
      " (" . mysqli_connect_errno() . ")"
    );
  }
  $data = $_POST['data'];
  // Step 2: Preform Database Query
  $query = "SELECT * FROM projects WHERE type = " . $data;
  $result = mysqli_query($connection, $query);
  // Check there are no errors with our SQL statement
  if (!$result) {
    die ("Database query failed.");
  }

  // Step 3: Do the thing
 while ($row = mysqli_fetch_assoc($result)) {
       echo "<figure>";
       echo "<a href={$row['link']}>";
       echo "<img src=\"{$row['image']}\" alt=\"{$row['title']}\" />";
       echo "<h3>{$row['name']}</h3>";
       echo "</a>";
       echo "<p>{$row['description']}</p>";
       echo "</figure>";
       echo "<hr />";
     }


 
    mysqli_free_result($result); //prep disconnect

  mysqli_close($connection);  //disconnects
 ?>