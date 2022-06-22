<?php

//connects to host, user, and database
$con = mysqli_connect('localhost','root','','calis1_patco_system');
//test connection
if(!$con) {
    die(mysqli_error()."Could not connect to the database.");
}

?>