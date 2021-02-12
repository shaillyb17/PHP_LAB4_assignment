<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Assignment</title>

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
        <div class = "content col-6">
            <form action="insert_lab4.php" method="POST" class = "inputs">
                Roll No: <input type="number" name="rollNo"><br><br>
                Name: <input type="text" name="username"><br><br>
                Age: <input type="number" name="age"><br><br>
                Score: <input type="number" name="score"><br><br>
                <input type="submit">
            </form>
        </div>
</div>
</body>
</html>