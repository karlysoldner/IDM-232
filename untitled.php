<?php
	//thanks Phil
  // Step 1: Create Database Connection
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "root";
  $dbname = "Projects";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Check the connection is good with no errors
  if (mysqli_connect_errno()) {
    die ("Database connection failed: " .
      mysqli_connect_error() .
      " (" . mysqli_connect_errno() . ")"
    );
  }
  // Step 2: Preform Database Query
  $query = "SELECT * FROM projects WHERE type = 'science'";
  $result = mysqli_query($connection, $query);
  // Check there are no errors with our SQL statement
  if (!$result) {
    die ("Database query failed.");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Databases</title>
</head>
<body>

  <?php
    // Step 3: Use Returned Data
    echo "<pre>";
    while ($row = mysqli_fetch_row($result)) {
      var_dump($row);
      echo "<hr>";
    }
    echo "</pre>";
  ?>

  <?php
    // Step 4: Release Returned Data
    mysqli_free_result($result);
  ?>

  <!--
  We could setup a new query here and build soemthing else if needed.
  We've freed the previous result, so we're able to build something
  else if needed.
  -->

  <?php
    // Step 5: Close Database Connection
    mysqli_close($connection);
  ?>
</body>
</html>