<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="Contact.css">

</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <img src="Photos/Appex.png" id="logo" />
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li> <a href="Home.php" class="effect-box">Home</a></li>
                <li><a href="Inventory.php" class="effect-box">Inventory</a></li>
                <li><a href="About.php" class="effect-box">About</a></li>

                <li><a href="Contact.php" class="effect-box">Contact</a></li>
            </ul>
            <button class="btn waves-effect black" type="submit" name="action" href="Home.php">LogOut
                <i class="material-icons right">assignment_ind</i>
            </button>
        </div>
    </nav>


    <div class="container">
        <form id="contact" action="" method="post">
            <h3>Quick Contact</h3>
            <h4>Contact us today, and get reply with in 24 hours!</h4>
            <fieldset>
                <input placeholder="Your name" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Your Email Address" type="email" tabindex="2" required>
            </fieldset>
            <fieldset>
                <input placeholder="Your Phone Number" type="tel" tabindex="3" required>
            </fieldset>
            <fieldset>
                <textarea placeholder="Type your Message Here...." tabindex="5" required></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
        </form>
    </div>
</body>

</html>