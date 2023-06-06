
  <?php
  // Replace with your database connection credentials
  $servername = 'localhost';
  $username = 'adminboard';
  $password = 'BB2GNVGA8fcI2BccI';

  // Create a connection to the database server
  $conn = new mysqli($servername, $username, $password);

  // Check if the connection was successful
  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }


  ?>
