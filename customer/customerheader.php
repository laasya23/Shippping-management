<?php
//connection to database
include("../connection.php");

//starts session
//session_start();
?>

<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- stylesheet -->
    <link rel="stylesheet" href="../styles.css">
    
    <title>PATCO - Customers</title>

  </head>
  <body>
      
            <!-- navigation menu options-->
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="../indexcustomer.php">Home<span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="quoteformc.php">Freight Quote and Booking</a>
                        <a class="nav-item nav-link" href="customerpending.php">Orders</a>
                        <a class="nav-item nav-link" href="../signout.php">Signout</a>
                    </div>
                </div>
      
      </div>
</body>
</html>