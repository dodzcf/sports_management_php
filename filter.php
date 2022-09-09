<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="header_main">
<div id="about" class="choose_section">
    	<div class="container">
    		<div class="col-sm-12">
    			<h1 class="choose_text">Search details about the <span class="color">Player / Teams / Games</span></h1>
    			<p class="lorem_text">On this page you can search the details about the players that are registered in the respeictive sports. You can also search which player plays in which team or you can see which player is playing which games.</p>
    		</div>
    	</div>
    </div>
    <div class="choose_section_2">
    	<div class="container">
    	    <div class="row">
    		    <div class="col-sm-4">
    			    <div class="power_full">
    				    <div class="icon"><a href="#" ><img src="https://www.searchpng.com/wp-content/uploads/2019/02/Holi-Colors-PNG-Image.png" ></a></div>
    				    <h2 class="powerful_text">Teams</h2>
    				    <p class="making_tetx">Teams are divided into colors. Choose a color from the drop-down menu to show the specific players of that team.</p>
    			        <form method = "POST" action="">
                        <div class="">
                                <select class="form-select btn btn-success" name="team" required>
                                <option selected disabled value="">Teams</option>
                                <option>Red</option>
                                <option>Green</option>
                                <option>Blue</option>
                                <option>White</option>
                                </select>
                                <div class="invalid-feedback">
                                Please select a valid state.
                                </div>
                            </div>
  
                            <br>
                            <button type="submit" class="btn btn-success" value="submit1" name="submit1">Submit</button>
                            </form>
                    </div>

    		    </div>
    		    <div class="col-sm-4">
    			    <div class="power">
    				    <div class="icon"><a href="#"><img src="https://www.freepnglogos.com/uploads/sport-png/sport-sports-management-asb-online-34.png"></a></div>
    				    <br>
                        <h2 class="totaly_text d-flex justify-content-center" >Games</h2>
    				    <p class="making">Select a game from the drop-down menu to show the players that are playign in that respective sports. </p>
                        <form method = "POST" action="">
                        <div class="">
                                <select class="form-select btn btn-success" name="games" required>
                                <option selected disabled value="">Games</option>
                                <option>Football</option>
                                <option>Basketball</option>
                                <option>Badminton</option>
                                <option>volleyball</option>
                                <option>Table tennis</option>
                                <option>Cricket</option>
                                </select>
                                <div class="invalid-feedback">
                                Please select a valid state.
                                </div>
                            </div>
  
                            <br>
                            <button type="submit" class="btn btn-info" value="submit2" name="submit2">Submit</button>
                            </form>
                    </div>
    	
    		    </div>
    		    <div class="col-sm-4">
    			    <div class="power2">
    				    <div class="icon"><a href="#"><img src="https://lh3.googleusercontent.com/proxy/Xk04XcfWlXuk9iJpxvWszFrb2lZ1ieGkh9LAFt7ZaS7wb0zXrmd0fgvJ0zWaMobHoKqee30KK7x0WbIvidC0tWT9qBJ1z-qVAnRKPWlRBYvey0VB7L_bMvYN7R4d0KDr4K8c4Sc9iXPJh6YC"></a></div>
    				    <br>
                        <h2 class="totaly_text d-flex justify-content-center">Players</h2>
    				    <p class="making">Enter the roll number of the player to check the details about the players thar are registered.(Note: Thte player that are note registered will not show)</p>
    			        <form method = "POST" action="">
                        <input type="name" class="" name="player" placeholder="180023" />
                        <br>
                        <br>
                        <button type="submit" class="btn btn-info" value="submit3" name="submit3">Submit</button>
                        </form>
                    </div>
    		    </div>
    	    </div>  
            <br>
<br>
<a href="index.php" class="d-flex justify-content-center"><input type ="submit" class="btn btn-success" value="Got to Home" /></a>
  		
    	</div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    </div>



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
else
{
    // echo "hey";
}




if(isset($_POST["submit1"]))
{   
    $team = $_POST['team'];
    // echo $team;
    $sql = "SELECT $team FROM team";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          
        $name1=$row[$team];
        if(!$name1=='')
        {   
            $sq = "SELECT * FROM player where team='$team'";
            $resul = $conn->query($sq);
            if ($resul->num_rows > 0) {
                while($ro = $resul->fetch_assoc()) {
                    $name1=$ro["username"];
                    $roll_no1=$ro["roll_no"];
                    $team1=$ro["team"];
                    $sports1=$ro["sports"];
                    $batch1=$ro["batch"];
                    $university1=$ro["university"];
                    $fname1=$ro["f_name"];
                    $date1=$ro["date"];
                    echo "<h2>Data of $fname1</h2>";
                    // echo "Name: " . $name1. "<br> Roll Number: " . $roll_no1."<br> Team: " . $team1."<br>Sports: " . $sports1."<br>Batch: " . $batch1."<br>University: " . $university1."<br>";
                    echo "<div class=''><div class=' jumbotron d-flex justify-content-center'><p class='p-3 mb-2 bg-info text-white'><strong >Roll Number:  &nbsp;&nbsp;&nbsp;</strong> $roll_no1 </p><p class='p-3 mb-2 bg-info text-white'><strong>Name:  &nbsp;&nbsp;&nbsp;</strong> $fname1</h2> &nbsp;&nbsp;<p class='p-3 mb-2 bg-info text-white'><strong >Team:  &nbsp;&nbsp;&nbsp;</strong> $team1 </p>&nbsp;&nbsp;<p class='p-3 mb-2 bg-info text-white'><strong >Sports:  &nbsp;&nbsp;&nbsp;</strong> $sports1 </p><p class='p-3 mb-2 bg-info text-white'><strong >University:  &nbsp;&nbsp;&nbsp;</strong> $university1 </p><p class='p-3 mb-2 bg-info text-white'><strong >Batch:  &nbsp;&nbsp;&nbsp;</strong> $batch1 </p><p class='p-3 mb-2 bg-info text-white'><strong >Batch:  &nbsp;&nbsp;&nbsp;</strong> $date1 </p></div></div>  ";
                    echo "<br>";

                  }
                  
            }
        }  
        
      }
    } 
    
}

if(isset($_POST["submit2"]))
{   
    $games= $_POST['games'];
    $sql = "SELECT sports FROM player where sports='$games'";
    $resu = $conn->query($sql);
    
    if ($resu->num_rows > 0) {
    
            $s = "SELECT * FROM player where sports='$games'";

            $res = $conn->query($s);
            if ($res->num_rows > 0) {
                while($r = $res->fetch_assoc()) {
                    $name1=$r["username"];
                    $roll_no1=$r["roll_no"];
                    $team1=$r["team"];
                    $sports1=$r["sports"];
                    $batch1=$r["batch"];
                    $university1=$r["university"];
                    $fname1=$r["f_name"];
                    $date1=$r["date"];
                    echo "<h2>Data of $fname1</h2>";
                    echo "<div class=''><div class=' jumbotron d-flex justify-content-center'><p class='p-3 mb-2 bg-info text-white'><strong >Roll Number:  &nbsp;&nbsp;&nbsp;</strong> $roll_no1 </p><p class='p-3 mb-2 bg-info text-white'><strong>Name:  &nbsp;&nbsp;&nbsp;</strong> $fname1</h2> &nbsp;&nbsp;<p class='p-3 mb-2 bg-info text-white'><strong >Team:  &nbsp;&nbsp;&nbsp;</strong> $team1 </p>&nbsp;&nbsp;<p class='p-3 mb-2 bg-info text-white'><strong >Sports:  &nbsp;&nbsp;&nbsp;</strong> $sports1 </p><p class='p-3 mb-2 bg-info text-white'><strong >University:  &nbsp;&nbsp;&nbsp;</strong> $university1 </p><p class='p-3 mb-2 bg-info text-white'><strong >Batch:  &nbsp;&nbsp;&nbsp;</strong> $batch1 </p><p class='p-3 mb-2 bg-info text-white'><strong >Batch:  &nbsp;&nbsp;&nbsp;</strong> $date1 </p></div></div>  ";
                    echo "<br>";

                  }
                  
            }
        // }  
        
    //   }
    } 
    
}


if(isset($_POST["submit3"]))
{   
    $player = $_POST['player'];
    $sql = "SELECT roll_no FROM player where roll_no='$player'";
    $resu = $conn->query($sql);
    
    if ($resu->num_rows > 0) {
 
            $s = "SELECT * FROM player where roll_no='$player'";

            $res = $conn->query($s);
            if ($res->num_rows > 0) {
                while($r = $res->fetch_assoc()) {
                    $name1=$r["username"];
                    $roll_no1=$r["roll_no"];
                    $team1=$r["team"];
                    $sports1=$r["sports"];
                    $batch1=$r["batch"];
                    $university1=$r["university"];
                    $fname1=$r["f_name"];
                    $date1=$r["date"];
                    echo "<h2>Data of $fname1</h2>";
                    echo "<div class=''><div class=' jumbotron d-flex justify-content-center'><p class='p-3 mb-2 bg-info text-white'><strong >Roll Number:  &nbsp;&nbsp;&nbsp;</strong> $roll_no1 </p><p class='p-3 mb-2 bg-info text-white'><strong>Name:  &nbsp;&nbsp;&nbsp;</strong> $fname1</h2> &nbsp;&nbsp;<p class='p-3 mb-2 bg-info text-white'><strong >Team:  &nbsp;&nbsp;&nbsp;</strong> $team1 </p>&nbsp;&nbsp;<p class='p-3 mb-2 bg-info text-white'><strong >Sports:  &nbsp;&nbsp;&nbsp;</strong> $sports1 </p><p class='p-3 mb-2 bg-info text-white'><strong >University:  &nbsp;&nbsp;&nbsp;</strong> $university1 </p><p class='p-3 mb-2 bg-info text-white'><strong >Batch:  &nbsp;&nbsp;&nbsp;</strong> $batch1 </p><p class='p-3 mb-2 bg-info text-white'><strong >Batch:  &nbsp;&nbsp;&nbsp;</strong> $date1 </p></div></div>  ";
                    echo "<br>";

                  }
                  
            }
        // }  
        
    //   }
    } 
    
}

?>











<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>