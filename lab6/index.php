<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Assignment</title>

        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=IBM+Plex+Sans:wght@300&display=swap" rel="stylesheet"> 

        <!-- CSS stylesheets -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<?php
			$name_err="";
			$email_err="";
			$gender_err="";
			$name=$email=$gender="";
			if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				if(empty($_POST["name"]))
				{
					$name_err = "Name is required!";
				}
				else
				{
					$name=$_POST["name"];
				}
				if(empty($_POST["email"]))
				{
					$name_err = "Email-ID is required!";
				}
				else
				{
					if(filter_var($email, FILTER_VALIDATE_EMAIL))
					{
						$email_err = "Invalid E-mail ID!";
					}
					else
					{
						$email=$_POST["email"];
					}
				}
				if(empty($_POST["gender"]))
				{
					$name_err = "Gender is required!";
				}
				else
				{
					$gender = $_POST["gender"];
				}
				function test_input($data)
				{
					$data-trim($data);
					$data-stripslashes($data);
					$data-htmlspecialchars($data);
					return $data;
				}
			}
		?>
        <br><br>
		<div class = "form">
            <h2>Registration Form</h2>
            <p><span class="error">* required</p>
            <form method="POST" action="<?php $_SERVER["PHP_SELF"]?>">
                <table>
                    <tr><td>Name: </td><td><input type="text" name='name'> <span class="error"> * <?php echo $name_err; ?></td></tr>
                    <tr><td>Email ID: </td><td> <input type="text" name="email"> <span class="error"> * <?php echo $email_err; ?></td></tr>
                    <tr> <td>Gender: </td><td><input type="radio" name="gender" value="Female">Female <input type="radio" name="gender" value="Male">Male <span class="error">    * <?php echo $gender_err; ?></td></tr>
                    <tr><td> <input class = "button btn btn-lg mybtn" type="submit" name="submit" value="Submit Details"></td></tr>
                </table>
            </form>
            <br>
            <?php
                echo "Your data:  <br>";
                echo "Name: ", $name, "<br> Email ID: ", $email, "<br> Gender: ", $gender;
            ?>
        </div>		
	</body>
</html>