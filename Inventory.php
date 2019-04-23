<?php
   require_once "dbconnection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Inventory</title>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="15">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



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


    <link rel="stylesheet" href="Inventory.css">

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

        <div class="box0">
            <h3> Arduino</h3>
            <p>Quantity: </p>
            <img src="Photos/arduino.Jpg" />

            <?php
    $query = "SELECT quantity FROM Piezas WHERE tools = 'Arduino'";    
    $result = mysqli_query($db,$query);
    
    while ($row = mysqli_fetch_array($result)){
        echo "<p class=action0 >".$row['quantity']."</p>"; 
    }
     ?>
        </div>

        <div class="box01">
            <h3> Battery </h3>
            <p>Quantity: </p>
            <img src="Photos/Baterry.Jpg" />
            <?php
    $query = "SELECT quantity FROM Piezas WHERE tools = 'Battery'";    
    $result = mysqli_query($db,$query);
    
    while ($row = mysqli_fetch_array($result)){
        echo "<p class=action01 >".$row['quantity']."</p>"; 
    }
     ?>
        </div>

        <div class="box02">
            <h3>Breadboard</h3>
            <p>Quantity: </p>
            <img src="Photos/Breadboard.Jpg" />
            <?php
    $query = "SELECT quantity FROM Piezas WHERE tools = 'Breadboard'";    
    $result = mysqli_query($db,$query);
    
    while ($row = mysqli_fetch_array($result)){
        echo "<p class=action02 >".$row['quantity']."</p>"; 
    }
     ?>
        </div>

        <div class="box03">
            <h3>Buzzer</h3>
            <p>Quantity </p>
            <img src="Photos/buzzer.Jpg" />
            <?php
    $query = "SELECT quantity FROM Piezas WHERE tools = 'Buzzer'";    
    $result = mysqli_query($db,$query);
    
    while ($row = mysqli_fetch_array($result)){
        echo "<p class=action03 >".$row['quantity']."</p>"; 
    }
     ?>
        </div>

        <div class="box04">
            <h3>RasberryPi</h3>
            <p>Quantity </p>
            <img src="Photos/RasberryPi.Jpg" />
            <?php
    $query = "SELECT quantity FROM Piezas WHERE tools = 'RasberryPi'";    
    $result = mysqli_query($db,$query);
    
    while ($row = mysqli_fetch_array($result)){
        echo "<p class=action04 >".$row['quantity']."</p>"; 
    }
     ?>
        </div>
    </div>
    <!------------------ Cards Section #2 ----------------------------->
    <div class="container1">

        <div class="box1">
            <h3> Cable Ties</h3>
            <p>Quantity: </p>
            <img src="Photos/cableties.Jpg" />

            <!---- here is the code that verifies --->
            <!---- with the database on how many articles -->
            <!-- are available in real time --->
            <?php
    $query = "SELECT quantity FROM Piezas WHERE tools = 'Cable Ties'";    
    $result = mysqli_query($db,$query);
    
    while ($row = mysqli_fetch_array($result)){
        echo "<p class=action >".$row['quantity']."</p>"; 
    }
     ?>
        </div>


        <div class="box2">
            <h3> Jumper Cables </h3>
            <p>Quantity: </p>
            <img src="Photos/jumpers.Jpg" />
            <?php
    $query = "SELECT quantity FROM Piezas WHERE tools = 'Jumper Cables'";
    $result = mysqli_query($db,$query);
    
    while ($row = mysqli_fetch_array($result)){
        echo "<p class=action1 >".$row['quantity']."</p>"; 
    }
     ?>

        </div>
        <div class="box3">
            <h3>LCD Display</h3>
            <p>Quantity: </p>
            <img src="Photos/lcd.Jpg" />
            <?php
             $query = "SELECT quantity FROM Piezas WHERE tools = 'LCD Display'";
             $result = mysqli_query($db,$query);
    
              while ($row = mysqli_fetch_array($result)){
              echo "<p class=action2 >".$row['quantity']."</p>"; 
    }
     ?>
        </div>

        <div class="box4">
            <h3>Multimeter</h3>
            <p>Quantity: </p>
            <img src="Photos/Multimeter.Jpg" />
            <?php
             $query = "SELECT quantity FROM Piezas WHERE tools = 'Multimeter'";
             $result = mysqli_query($db,$query);
    
              while ($row = mysqli_fetch_array($result)){
              echo "<p class=action3 >".$row['quantity']."</p>"; 
    }
     ?>
        </div>


        <div class="box5">
            <h3>Capacitor 105c</h3>
            <p>Quantity: </p>
            <img src="Photos/Capacitor105c.Jpg" />

            <?php
             $query = "SELECT quantity FROM Piezas WHERE tools = 'Capacitor 105c'";
             $result = mysqli_query($db,$query);
    
              while ($row = mysqli_fetch_array($result)){
              echo "<p class=action4 >".$row['quantity']."</p>"; 
    }
     ?>


        </div>

    </div>
</body>

</html>