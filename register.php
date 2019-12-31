<?php
if(isset($_POST['register'])){
    $connect = new mysqli("127.0.0.1","root","","notes");
    if(!$connect){ echo "ERROR: Could not connect to the database"; die(); }
    else{
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = hash('sha512',$password);

        $registerUserQuey = "INSERT INTO `users`(`username`, `password`) VALUES ('$username','$password')";
        if(mysqli_query($connect, $registerUserQuey)){
            echo "Registeded";
            
        }else{ header("Location: index.php"); die(); }
    } // Else for the connection
}else{ header("Location: index.php"); die(); }
?>