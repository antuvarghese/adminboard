<?php
$susername = $spath = $spassword = "";

// Get the form data
$susername = $_POST['username'];
$spath = $_POST['path'];
$spassword = $_POST['password'];
$escapedUser = escapeshellarg($susername);
$escapedPath = escapeshellarg($spath);
$escapedPass = escapeshellarg($spassword);
if ($output === null) {
    echo 'Successfully created the user' . $escapedUser . '' . $escapedPass . '' . $escapedPath . '';
} else {
    echo 'An error occurred while writing the username to file.';
}


// Create the Linux user
//$createUserCommand = "sudo useradd -m -d " . $escapedPath . " " . $escapedUser . " ";
//$createPassword = "sudo echo" . $escapedUser . ":" . $escapedPass . " | chpasswd";
$createUser = "sudo /bin/bash useradd.sh -u . $escapedUser . -p . $escapedPass . -l . $escapedPath .";

shell_exec($createUser);
//shell_exec($createPassword);

// Store the user details in the MySQL database
$host = "localhost";
$username = "adminboard";
$password = "BB2GNVGA8fcI2BccI";
$database = "adminboard";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$insertQuery = "INSERT INTO webusers (username, path, password) VALUES ('$susername', '$spath', '$spassword')";
$conn->query($insertQuery);

?>
<html>
<body>
<?php
// Retrieve user details from the database
$selectQuery = "SELECT username, path, password FROM webusers";
$result = $conn->query($selectQuery);

// Display user details in an HTML textarea
$conn->close();

?>
</body>
</html>
