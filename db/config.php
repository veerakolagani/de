<?php
$link = mysqli_connect("localhost", "deccanmain", "Deccanbrain@6245", "deccan_brain");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>