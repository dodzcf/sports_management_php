<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

// if()



?>

<h2><?php 
$name =$_POST["name"];
$password = $_POST["password"];
$roll_no = $_POST["roll_no"];
$university = $_POST["university"];
$batch = $_POST['batch'];
$sports = $_POST['sports'];
$team = $_POST['team'];
$date = $_POST['date'];
$fname = $_POST['fname'];

$name_check=false;
$password_check=false;
$roll_no_check=false;
$university_check=false;
$batch_check=false;
$sports_check=false;
$team_check=false;
$date_check=false;
$fname_check=false;

if($name)
{
    $name_check=true;
}

if($password)
{
    $password_check=true;
}
if(is_numeric($roll_no))
{
    $roll_no_check=true;
}
if($university)
{
    $university_check=true;
}
if($batch)
{
    $batch_check=true;
}
if($sports)
{
    $sports_check=true;
}
if($team)
{
    $team_check=true;
}
if($date)
{
    $date_check=true;
}
if(strlen($fname)>5)
{
    $fname_check=true;
}


$dup=false;


if(
$name_check=true and
$password_check=true and
$roll_no_check=true and
$university_check=true and
$batch_check=true and
$sports_check=true and
$team_check=true and
$fname_check=true and
$date_check=true
)
{
$dup=true;
}

echo "<br>";


$reg_check=false;

if($dup=true)
{
    if ($result = $conn -> query("SELECT username FROM player where username='$name';")) {

        $re=$result -> num_rows;
        // echo $re;
      }
}
if($re==1)
{
    echo "User already exist!";
}
else
{
$sql = "INSERT INTO player (username, password, roll_no,team,sports,batch,university,f_name,date)
VALUES ('$name', '$password', '$roll_no','$team','$sports','$batch','$university','$fname','$date')";

if ($conn->query($sql) === TRUE) {
  $sq="INSERT INTO team ($team) VALUES('$name') ";
  if ($conn->query($sq) === TRUE)
  {
    //   echo "added color";
    header("Location: success.html");
    exit();
  }
} else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?></h2>

</body>
</html>