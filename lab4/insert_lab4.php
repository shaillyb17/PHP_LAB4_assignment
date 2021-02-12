<?php
$servername = 'localhost:3306';
$username = 'root';
$password = "";
$dbname = "college";
$con = mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
    {echo "server not connected";}
else
    {echo "server is connected\n";}

if(!mysqli_select_db($con,$dbname))
    {echo "database not connected";}
$Roll_No = $_POST['rollNo'];
$Name = $_POST['username'];
$Age = $_POST['age'];
$Score = $_POST['score'];
$query = "INSERT INTO student(Roll_No,Name,Age,Score) VALUES('$Roll_No', '$Name', '$Age', '$Score')";
if(mysqli_query($con,$query))
    {echo "Data inserted successfully!\n";}
?>

<!DOCTYPE html>
<html>
<body>


    <form action="insert_lab4.php" method="POST">
        Roll No: <input type="number" name="rollNo"><br><br>
        Name: <input type="text" name="username"><br><br>
        Age: <input type="number" name="age"><br><br>
        Score: <input type="number" name="score"><br><br>
        <input type="submit">
    </form>
</body>
</html>