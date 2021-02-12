<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";
$con = mysqli_connect($servername, $username, $password, $dbname);
if ($con){
    echo "";
} 
else{
    echo "Error in connecting to server. <br>". mysqli_error($con)." <br>";
}

$dbc = mysqli_select_db($con, $dbname);
if ($dbc){
    echo "";
} 
else{
    echo "Error in connecting to database.<br>". mysqli_error($dbc)." <br>";
}

$query = "SELECT Roll_No,Name,Age,Score FROM student";
$result = mysqli_query($con, $query);
if ($result){
    echo "";
} else{
    echo "Error in performing the query.<br>". mysqli_error($result)." <br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=IBM+Plex+Sans:wght@300&display=swap" rel="stylesheet"> 

  <!-- CSS stylesheets -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="row">
        <div class="heading col-6" style="margin-top: 10%;">
            <h1>PHP ASSIGNMENT<br>CSE 230</h1>
            <h2>191112467<br>Shailly Mishra </h2>
        </div>
        <div class = "content col-6 data" >
            <h1>Complete Details</h1>
            <?php
                while($row = mysqli_fetch_assoc($result)){
                    echo "<br>Roll Number: " .$row['Roll_No']."<br>Name: " .$row['Name']." <br>Age: " .$row['Age']." <br>Score: " .$row['Score']." <br>";
                    echo "<br>";
                }
            ?>
        </div>
    </div>
</body>
</html>