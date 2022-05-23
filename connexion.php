<?php
$user="root";
$mdp="";
$bd="basenour";
$server="localhost";
 
$link= mysqli_connect($server, $user, $mdp, $bd);

if($link)
{
    echo"Connexion rétablie"; 
}
else
{
    die(mysqli_connect_error());
}
?>