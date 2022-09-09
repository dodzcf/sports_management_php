<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' href='style/data.css' />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Validation</title>

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




?>


<h2>
<?php


$name= $_POST["username"];
$password= $_POST["password"];

if ($result = $conn -> query("SELECT username FROM player where username='$name' and password='$password';")) {

    $re=$result -> num_rows;
    // echo $re;
    if($re==1)
    {
      $sql = "SELECT * FROM player where username='$name' and password='$password'";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $name1=$row["username"];
          $roll_no1=$row["roll_no"];
          $team1=$row["team"];
          $sports1=$row["sports"];
          $batch1=$row["batch"];
          $university1=$row["university"];
          $fname1=$row["f_name"];
          $date1=$row["date"];
          // echo "Name: " . $name. "<br> Roll Number: " . $roll_no1."<br> Team: " . $team1."<br>Sports: " . $sports1."<br>Batch: " . $batch1."<br>University: " . $university1."<br>";
        }
      } else {
        echo "0 results";
      }
      
  }
  else
  {
    header("Location: login.php");
  exit();
  }
}


?>

</h2>

<div class="container" style="width:auto; padding:100px; auto;">
  <div class="jumbotron">

<h1 class="p-3 mb-2 bg-dark text-white d-flex justify-content-center"><?php echo $fname1  ?>'s Data</h1>


  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Roll Number</th>
      <th scope="col">Name</th>
      <th scope="col">Team</th>
      <th scope="col">Sports</th>
      <th scope="col">Batch</th>
      <th scope="col">University</th>
      <th scope="col">Full Name</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $roll_no1  ?></th>
      <td><?php echo $name1  ?></td>
      <td><?php echo $team1  ?></td>
      <td><?php echo $sports1  ?></td>
      <td><?php echo $batch1  ?></td>
      <td><?php echo $university1  ?></td>
      <td><?php echo $fname1  ?></td>
      <td><?php echo $date1  ?></td>
    </tr>
  </tbody>
</table>
<br>
          <a href="index.php" class="d-flex justify-content-center"><input type ="submit" class="btn btn-success d-flex justify-content-center" value="Got to Home" /></a>
        
</div>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>