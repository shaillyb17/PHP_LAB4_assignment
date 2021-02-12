<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        echo "Hello ",$_POST['username'],"!",'<br><br>';
            if(isset($_POST['submit'])){
            echo "submitted";
            $username = $_POST['username'];
        }
    }
?>

<!DOCTYPE html>
<html>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        Name: <input type="text" name="username"><br><br>
        <input type="submit">
    </form>
</body>
</html>