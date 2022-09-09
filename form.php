<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' href='style/form.css' />

</head>
<body>




<div class="container form">
    <div class="jumbotron">
    
    <h1 class="heading">Registration</h1>
    <br>
    <br>
    <form method = "POST" action="valid.php">
  <div class="form-group ">
    <input type="name" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Username" required>
  </div>
  <br>
  <br>
  <div class="form-group">
    <input type="password" class="form-control" name="password" placeholder="Password" required>
  </div>
    <br>
    <br>
  <div class="form-group">
    <input type="text" class="form-control" name="roll_no" placeholder="Roll Number (180090)" required>
  </div>
    <br>
    <br>
    <div class="form-group ">
    <input type="name" class="form-control" name="fname" aria-describedby="emailHelp" placeholder="Enter Full Name" required>
  </div>
  <br>
  <br>
    <div class="form-group">
    <input type="text" class="form-control" name="university" placeholder="University" required>
  </div>
    <br>
    <br>
    <div class="form-group">
    <div class="">
    <select class="form-select btn btn-success" name="team" required>
      <option selected disabled value="">Team</option>
      <option value="Red">Red</option>
      <option value="White">White</option>
      <option value="Green">Green</option>
      <option value=Blue>Blue</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  

  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  <div class="">
    <select class="form-select btn btn-success" name="batch" required>
      <option selected disabled value="">Batch</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  <div class="">
    <select class="form-select btn btn-success" name="sports" required>
      <option selected disabled value="">Sports</option>
      <option>Football</option>
      <option>Basketball</option>
      <option>Badminton</option>
      <option>Volleyball</option>
      <option>Table tennis</option>
      <option>Cricket</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  <div class="">
    <select class="form-select btn btn-success" name="date" required>
      <option selected disabled value="">Date (YYYY-MM-DD)</option>
      <option>2021-08-05</option>
      <option>2021-08-08</option>
      <option>2021-08-10</option>
      <option>2021-08-12</option>
      <option>2021-08-15</option>
      <option>2021-08-17</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  

</div>
<br>
  <br>
    <!-- <div class="form-group">
    <input type="file" class="form-control" name="university" placeholder="University" required>
  </div> -->
    <br>
    <br>
    <br>
  <button type="submit" class="btn btn-primary" value="submit">Submit</button>
</form>



</div>
</div>



<br>









<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>