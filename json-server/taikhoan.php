<?php
include "connect.php";


    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        echo "1";
    }else{
        echo "fail";
    }

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;}
?>