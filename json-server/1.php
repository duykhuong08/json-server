<?php
$host ="20.212.54.14";
$usename ="root";
$password = "";
$database = "thietbi";

$conn = mysqli_connect($host,$usename,$password,$database);
mysqli_query($conn,"SET NAMES 'utf8'");
if($conn){
    echo"okay";
}
?>