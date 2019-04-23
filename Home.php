<?php
   require_once "dbconnection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>APEX Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>


    <link rel="stylesheet" href="Home.scss">



    <script>
    $(document).ready(function() {

        $('#example tbody').click(function() {
            var href = $(this).find("a").attr("href");
            if (href) {
                window.location = href;
            }
        });

    });
    </script>
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

                <button class="btn waves-effect black" type="submit" name="action" href="Logout.php">LogOut
                    <i class="material-icons right">assignment_ind</i>
                </button>

            </ul>




        </div>
    </nav>

    <h2 class="t">STUDENT REQUEST</h2>

    <div class="container z-depth-2" id="tab0">
        <table class="highlight">
            <thead>
                <tr>

                    <th>Name</th>
                    <th>Student ID</th>
                    <th>ORDER #</th>
                </tr>
            </thead>

            <tbody id="example">


                <?php
             
             $sql = "SELECT name, student_id, ordr_num from Orders";
             $result = $db-> query($sql);

             if ($result -> num_rows > 0){
                 while ($row = $result-> fetch_assoc()){
                     echo "<tr><td>". $row["name"] ."</td><td>". $row["student_id"] ."</td><td>". $row["ordr_num"] ."</td></tr>";

                    }

             }
             else{
                 echo "0 result";
             }
            ?>

            </tbody>

        </table>

    </div>

    <div class="container z-depth-2" id="tab1">

            <table >
               
            </table>
    

    </div>


</body>


</html>