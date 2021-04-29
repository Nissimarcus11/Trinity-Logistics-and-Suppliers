<?php
// session_start();
$servername = "127.0.0.1";
$server_user = "root";
$server_pass = "";
$dbname = "trinity";
$con = mysqli_connect($servername, $server_user, $server_pass, $dbname);

if (!$con){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo '<script> console.log("Connection was successful");</script>';
}




?>