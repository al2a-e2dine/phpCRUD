<?php
$dbc=mysqli_connect('localhost','root','','crud');

if(!$dbc){
    echo "erreur de cx";
    exit();
}
?>