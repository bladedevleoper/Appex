<?php
session_start();

 require_once "dbconnection.php";

 if ($_SERVER["REQUEST_METHOD"] == "POST"){
	 
       $user = $_POST["student"];
       $pwd = $_POST["password"];

       $query = "SELECT * FROM Usuarios WHERE student_id='$user' AND passwrd='$pwd';";

       if (!$query) {
	      printf("Error: %s\n", mysqli_error($db));
	      exit();
       }

       $result = mysqli_query($db,$query);
       
       while($row = mysqli_fetch_array($result)){
       
        if ($user == $row['student_id'] && $pwd == $row['passwrd']){
	       
         header("Location: Home.php");
         mysqli_close($db);
         exit();
         
        }
       }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>APEX LOGIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Login.scss">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>


<body>

    <img class="logo" src="Photos/Appex.png">
    <div class="bg"></div>

    <form method="POST" class="login">
        <h1 class="login-title">Login</h1>
        <input type="text" name="student" class="login-input" placeholder="Student Id" autofocus required>
        <input type="password" name="password" class="login-input" placeholder="Password" required>
        <input type="submit" value="Submit" class="login-button">
        <p class="login-lost"><a href="">Forgot Password?</a></p>
    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
    $('.message a ').click(fucntion() {
        $('form').animate({
            height: "toggle",
            opacity: "toggle"
        }, "slow");
    });
    </script>

</body>

</html>