<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <link rel='stylesheet' type='text/css' href='style/data.css' />

</head>
<body>
    
<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB="Sports";

// Create connection
$conn = new mysqli($servername, $username, $password, $DB);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

$sql = "SELECT username FROM player";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["username"]. "<br>";
  }
} else {
  echo "0 results";
}

// echo $_POST["username"];
?>







</body>
</html>