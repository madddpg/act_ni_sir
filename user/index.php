<?php
    session_start();



    if(isset($_SESSION["id"])){

        $user_id = $_SESSION["id"];

        include("../connections.php");

        $record = mysqli_query($connections, "SELECT * FROM mytbl WHERE id='$user_id'");
        while($row = mysqli_fetch_assoc($record)){

            $db_name = $row["name"];
            $db_email = $row["email"];
            $db_address = $row["address"];

        }

        echo "Welcome $db_name! <a href='logout.php'>Logout</a>";
    }else{

            echo "You must login first! <a href='../login.php'>Login now!</a>"; 
    }
?>
