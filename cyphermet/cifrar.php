<?php
require_once 'dbconfig.php';

  $db_connection = mysqli_connect($host, $username,$password,  $dbname);
    if ($db_connection->connect_errno) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if($_POST){
    $uname=$_POST["form_name"];
    $upass=$_POST["form_pass"];
    $sql= "INSERT INTO usuarios (username, password) VALUES ('$uname', '".SHA1($upass)."')";
    if(mysqli_query($db_connection, $sql)) {
        $mensaje="User registered";
    } 
    else {
        echo "error" . $sql . "<br>" . $db_connection->error;
    }
    $db_connection->close();
    }
    
    
?>